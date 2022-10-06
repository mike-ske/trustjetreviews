let activeStar = "";
const stars = document.querySelectorAll("span.str");
console.log(stars);
const colors = {
    str1: "#cd1111",
    str2: "#fe861a",
    str3: "#ffcc01",
    str4: "#77cf0a",
    str5: "#08b67b",
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