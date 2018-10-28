<!-- <!-- 
Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="cv-page">
    <!-- cv kodas -->
    <section class="grey-block">
        <img src="css/images/photo.png" alt="">
    </section>

    <section class="cv-main container">
        <div>
            <h2><?php print $page['content']['name'];?></h2>
            <p>Pageidaujama darbo pozicija</p>
        </div>
        <h1>Curriculum Vitae</h1>
    </section>
    <section class="personal-details">
            <h2>Personal details</h2>
            <div class="flex-container inner-container">
                <div>
                    <div class="bold">Phone</div>
                    <div>+370 777 777 777</div>
                </div>
                <div>
                    <div class="bold">Email</div>
                    <div>ceo@g00gle.com</div>
                </div>
                <div>
                    <div class="bold">City</div>
                    <div>Vilnius</div>
                </div>
                <div>
                    <div class="bold">Age</div>
                    <div>35</div>
                </div>
                <div>
                    <div class="bold">Marital status</div>
                    <div>Married</div>
                </div>
            </div>
        </section>
    <section class="work-experience">
            <h2>Work experience</h2>
            <div class="flex-container inner-container">
                <div class="block block-1">
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>

                </div>
                <div class="block block-2">
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio">
            <h2>Portfolio</h2>
            <div class="flex-container inner-container">
                <div class="flex-item">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
                <div class="flex-item">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
            </div>
        </section>

        <section class="contanct-me">
            <h2>Contact me</h2>
            <div>
                <div class="flex-container">
                    <i class="fas fa-3x fa-envelope-square"></i>
                    <span>ceo@g00gle.com</span>
                </div>
                <div class="flex-container">
                    <i class="fas fa-3x fa-phone-square"></i>
                    <span>+370 777 777 777</span>
                </div>
            </div>
        </section>

</div>
