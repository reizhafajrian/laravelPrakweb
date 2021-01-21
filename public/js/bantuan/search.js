const search = document.querySelector("#search");
const searchClick = document.querySelector("#search-button")
const main = () => {
    window.onload = async() => {
        searchClick.onclick = () => {

            window.find(search.value);
            return true;
        }
    }
}
export default main;