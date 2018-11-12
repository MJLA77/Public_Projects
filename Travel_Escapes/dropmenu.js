        // THIS FUNCTION IS SUPPOSED TO MAKE THE DROP DOWN MENU DROP

        var button = document.getElementById('ham-button')
        var menu = document.getElementById('menu')
        var closeButton = document.getElementById('close-button')

        function openMenu(){

            menu.className = 'menu'

        }

        function closeMenu() {
            menu.className = 'menu closed'
        }

        button.addEventListener('click', openMenu)
        closeButton.addEventListener('click', closeMenu)