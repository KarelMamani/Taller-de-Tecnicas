document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const searchButton = document.querySelector('.search-bar button');
    const filterButtons = document.querySelectorAll('.filter-button');
    const recipes = document.querySelectorAll('.recipe');

    searchButton.addEventListener('click', () => {
        const query = searchInput.value.toLowerCase();
        recipes.forEach(recipe => {
            const title = recipe.querySelector('.recipe-title').textContent.toLowerCase();
            if (title.includes(query)) {
                recipe.style.display = 'block';
            } else {
                recipe.style.display = 'none';
            }
        });
    });

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            recipes.forEach(recipe => {
                if (filter === 'all' || recipe.getAttribute('data-category').includes(filter)) {
                    recipe.style.display = 'block';
                } else {
                    recipe.style.display = 'none';
                }
            });
        });
    });
});
