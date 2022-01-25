<footer class="darkCyanTheme container">
        <div class="col4 m-col8">
            <h6>
                Information og hjælp
            </h6>
            <ul>
                <li>
                    <a target="_blanc" href="https://stps.dk/da/tilsyn/tilsyn-med-sundhedspersoner/tilsyn-med-kosmetisk-behandling/">
                        Lovgivningen om kosmetisk sygeplejerske
                    </a>
                </li>
                <li>
                    <a href="/ofte-stillede-spoergsmaal">
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
                    <a href="/undervisere">
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
                    <a href="https://goo.gl/maps/GPpoBhAYtmo3SRCq5">
                        Strandbygade 75 <br>
                        6700 Esbjerg
                    </a>
                </li>
                <li>
                    <a href="mailto:info@resom.dk">
                        info@resom.dk
                    </a>
                </li>
                <li>
                    <a href="tel:+45xxxxxxxx">
                        +45 xx xx xx xx
                    </a>
                </li>
            </ul>
        </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <?php 
        wp_footer();
    ?>
</body>
</html>