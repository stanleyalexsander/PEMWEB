const currentPath = window.location.pathname;

const menuMapping = {
    "/dashboard": ["dashboard-nav", "dashboard-side"],
    "/data-barang": ["data-barang-nav", "data-barang-side"],
    "/barang-masuk": ["barang-masuk-nav", "barang-masuk-side"],
    "/barang-keluar": ["barang-keluar-nav", "barang-keluar-side"],
    "/pengguna": ["pengguna-nav", "pengguna-side"],
};

if (menuMapping[currentPath]) {
    menuMapping[currentPath].forEach((menuId) => {
        const menuElement = document.getElementById(menuId);
        if (menuElement) {
            menuElement.classList.add("btn-active");
        }
    });
}
