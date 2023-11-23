const colorButton = document.getElementById('colorBtn');

colorButton.addEventListener('mouseenter', () => {
    const randomColor = getRandomColor();
    colorButton.style.backgroundColor = randomColor;
});

function getRandomColor(){
    const letters = '0123456789ABCDEFGHIJ';
    let color = '#';
    for (let i = 0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}