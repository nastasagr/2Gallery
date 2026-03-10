document.addEventListener('alpine:init', () => {
    Alpine.data('loginForm', () => ({
        form: {
            email: '',
            password: '',
        },

        loading: false,
        errorMessage: '',
        successMessage: '',

        async submitLogin() {
            this.errorMessage = '';
            this.successMessage = '';

            if (!this.form.email.trim() || !this.form.password.trim()) {
                this.errorMessage = 'Email and password are required.';
                return;
            }

            this.loading = true;

            try {
                const response = await fetch('api.php?action=login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        Accept: 'application/json',
                    },
                    body: JSON.stringify({
                        email: this.form.email,
                        password: this.form.password,
                    }),
                });

                const result = await response.json();

                if (!response.ok || !result.success) {
                    this.errorMessage = result.message || 'Login failed.';
                    return;
                }

                this.successMessage = result.message || 'Login successful.';
                localStorage.setItem('auth_user', JSON.stringify(result.data));

                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 300);
            } catch (error) {
                console.error(error);
                this.errorMessage = 'Network error. Please try again.';
            } finally {
                this.loading = false;
            }
        },
    }));
});