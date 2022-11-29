const filters = document.querySelector('.filters');
const allFilters = document.querySelectorAll('.filter');
const arrowIcons = document.querySelectorAll(".icon i");
let isDragging = false;

const handleIcons = () => {
    let scrollVal = Math.round(filters.scrollLeft);
    let maxScrollableWidth = filters.scrollWidth - filters.clientWidth;
    arrowIcons[0].parentElement.style.display = scrollVal > 0 ? 'flex' : 'none';
    arrowIcons[1].parentElement.style.display = maxScrollableWidth > scrollVal ? 'flex' : 'none';
}

arrowIcons.forEach(icon => {
    icon.addEventListener('click', () => {
        filters.scrollLeft += icon.id === "left" ? -450 : 450;
        setTimeout(() => handleIcons(), 50);
        console.log(icon.id)
        if(icon.id === "left") {
            icon.style.display = "none";
            arrowIcons[1].style.display = "block";
        } else {
            icon.style.display = "none";
            arrowIcons[0].style.display = "block";
        }
    })
});

allFilters.forEach(filter => {
    filter.addEventListener('click', () => {
        filter.classList.toggle('filter-active');
    })
});

const dragging = (e) => {
    if (!isDragging) return;
    filters.classList.add('dragging');
    filters.scrollLeft -= e.movementX;
    handleIcons();
}

const stopDragging = () => {
    isDragging = false;
    filters.classList.remove('dragging');
}

filters.addEventListener('mousedown', () => isDragging= true);
filters.addEventListener('mousemove', dragging);
filters.addEventListener('mouseup', stopDragging);