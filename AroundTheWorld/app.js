var drawer = document.getElementById('drawer');

document.getElementById("menu-btn").addEventListener("click", showDrawer);
document.getElementById("close").addEventListener("click", hideDrawer);

function showDrawer() {
  if (!drawer)
    return;
  drawer.classList.add('visible');
}

function hideDrawer() {
  drawer.classList.remove('visible');
}
