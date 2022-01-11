<footer class="darkCyanTheme">
        <section class="container">
            <div class="col4 m-col8">
                <h6>
                    Information og hjælp
                </h6>
                <ul>
                    <li>
                        <a href="http://stps.dk/da/sundhedsprofessionelle-og-myndigheder/det-risikobaserede-tilsyn/tilsyn-med-sundhedspersoner/kosmetisk-behandling">
                            Lovgivningen om kosmetisk sygeplejerske
                        </a>
                    </li>
                    <li>
                        <a href="https://christine.karinkohlmetz.dk/ofte-stillede-spoergsmaal/">
                            Ofte stillede spørgsmål
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col2 m-col8">
                <h6>
                    Om os
                </h6>
                <ul>
                    <li>
                        <a href="">
                            Mød underviserne
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Hvorfor vælge os?
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col5 push1 m-pushNone m-col8">
                <h6>
                    Kontakt
                </h6>
                <ul>
                    <li>
                        <a href="">
                            Strandbygade 75
                        </a>
                    </li>
                    <li>
                        <a href="">
                            info@resom.dk
                        </a>
                    </li>
                    <li>
                        <a href="">
                            +45 
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </footer>
    <script>
    const burger = document.querySelectorAll('.burger')
    const sideNav = document.querySelector('.sideNav')
    
    const toggle = () => {
        console.log('me me here')
        sideNav.classList.toggle('on')
    }
    
    burger.forEach((i, index) => {
        burger[index].addEventListener('click', toggle)
    })
    </script>
    <?php 
        wp_footer();
    ?>
</body>
</html>