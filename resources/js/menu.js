export default {
    data() {
        return {
            menus: [],
            menu: null,
            loading: false,
            error: null,
        };
    },

    async getAllMenus() {
        this.loading = true;
        this.error = null;

        try {
            const response = await fetch('/api/products');
            if (!response.ok) {
                throw new Error('Erreur lors de la récupération des produits');
            }
            this.menus = await response.json();
        } catch (err) {
            this.error = err.message;
        } finally {
            this.loading = false;
        }
    },

    async getMenu(id) {
        this.loading = true;
        this.error = null;
        this.product = null;

        try {
            const response = await fetch(`/product/${id}/show`);
            if (!response.ok) {
                throw new Error('Erreur lors de la récupération du produit');
            }
            this.menu = await response.json();
        } catch (err) {
            this.error = err.message;
        } finally {
            this.loading = false;
        }
    },

    async updateMenu(id, data) {
        this.loading = true;
        this.error = null;

        try {
            const response = await fetch(`/product/${id}/update`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            });
            if (!response.ok) {
                throw new Error('Erreur lors de la mise à jour du produit');
            }
            await this.getMenu(id);
        } catch (err) {
            this.error = err.message;
        } finally {
            this.loading = false;
        }
    },

    async DeleteMenu(id) {
        this.loading = true;
        this.error = null;
        try {
            const response = await fetch(`/product/${id}/delete`, {
                method: 'DELETE',
            });
            if (!response.ok) {
                throw new Error('Erreur lors de la suppression du produit');
            }
            await this.getAllMenus();
        } catch (err) {
            this.error = err.message;
        } finally {
            this.loading = false;
        }
    },
};
