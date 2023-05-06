

window.onload = function() {
    
    const likeButtons = document.querySelectorAll('.reaction');

    likeButtons.forEach(button => {
        button.addEventListener('click', event => {
            event.preventDefault(); // prevent form submission

            const xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
                const isLoggedIn = JSON.parse(this.responseText);

                if (isLoggedIn) {
                    window.location.href = 'reaction.php';
                } else {
                    const confirmed = window.confirm('Please login to like this post.');

                    if (confirmed) {
                      window.location.href = 'login.php';
                    }
                }
              }
            };

            xhr.open('GET', 'check_login.php', true);
            xhr.send();
        });
    });



}
