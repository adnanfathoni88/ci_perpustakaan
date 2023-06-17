<footer>
    <p>footer</p>
</footer>

<style>
    footer {
        background-color: #333;
        color: #fff;
        padding: 1%;
        text-align: center;
        font-size: 2vw;
    }

    @media (max-width: 768px) {
        footer {
            font-size: 3vw;
        }
    }
</style>


<script>
    var toggleSidebar = document.getElementById('toggleSidebar');
    var sidebar = document.getElementById('sidebar');
    var body = document.getElementById('content');
    var isSidebarHidden = false;

    if (isSidebarHidden) {
        sidebar.style.transform = 'translateX(-200px)';
        body.style.marginLeft = '-200px';
        isSidebarHidden = false;
    } else {
        sidebar.style.transform = 'translateX(0px)';
        body.style.marginLeft = '0';
        isSidebarHidden = true;
    }

    toggleSidebar.addEventListener('click', function() {
        if (isSidebarHidden) {
            sidebar.style.transform = 'translateX(-200px)';
            body.style.marginLeft = '-200px';
            isSidebarHidden = false;
        } else {
            sidebar.style.transform = 'translateX(0px)';
            body.style.marginLeft = '0';
            isSidebarHidden = true;
        }
    });
</script>
<script>
    var menuLinks = document.querySelectorAll('.sidebar a');


    menuLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            menuLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>

<!-- logout -->

</body>

</html>