let activeStar = "";
const stars = document.querySelectorAll("span");
console.log(stars);
const colors = {
    str1: "red",
    str2: "#f73",
    str3: "#fa2",
    str4: "rgb(40, 181, 59)",
    str5: "rgb(8, 152, 50)",
};

const clickEvent = (e) => {
    stars.forEach((element) => {
        element.style.background = "#ccc";
    });
    const currentElement = e.target;
    activeStar = currentElement.id;
    for (let i = 0; i < 5; i++) {
        const element = stars[i];
        element.style.background = colors[activeStar];
        if (element.id === activeStar) {
            break;
        }
    }
};

stars.forEach((element) => {
    element.addEventListener("click", clickEvent);
}); 