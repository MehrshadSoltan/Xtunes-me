const tabItems = document.querySelectorAll(".tab-item");
const tabContentItems = document.querySelectorAll(".tab-content-item");

function removeBorder() {
    tabItems.forEach(item => {
        item.classList.remove('tab-border');
    })
}
function removerShow() {
    tabContentItems.forEach(item => {
        item.classList.remove('show');
    })

}
function selectItem(e) {
    removeBorder();
    removerShow();
    this.classList.add('tab-border');
    let tabContentItem = document.querySelector(`#${this.id}-content`);
    tabContentItem.classList.add('show');
}


tabItems.forEach(item => {
    item.addEventListener("click", selectItem)
});

VANTA.NET({
    el: "#showcase",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    backgroundColor: 0x0
})


