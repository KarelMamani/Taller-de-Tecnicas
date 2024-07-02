document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const searchButton = document.querySelector('.search-bar button');
    const filterButtons = document.querySelectorAll('.filter-button');
    const recipes = document.querySelectorAll('.recipe');

    // Funcionalidad de búsqueda
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

    // Funcionalidad de filtro
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

    // Funcionalidad de likes
    const likeButtons = document.querySelectorAll('.like-btn');

    likeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const commentElement = this.closest('.comentario');
            const commentId = commentElement.getAttribute('data-id');
            const likeCountElement = this.querySelector('.like-count');

            fetch('like-comment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `commentId=${commentId}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    likeCountElement.textContent = parseInt(likeCountElement.textContent) + 1;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
