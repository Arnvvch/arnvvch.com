<div class="window-page page">
    <div class="window-column">
        <div class="window" id="w1" style="max-height:<?php echo rand(36,48); ?>rem">
            <div class="context">
                <div class="title" hx-on:click="window.open('https://m.starnieuws.com/index.php/welcome/index/nieuwsitem/77579', '_blank')">First Global 2023 Singapore Robotics Competition</div>
                <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close" hx-trigger="click" hx-get="" hx-target="#w1" hx-swap="delete"></div>
            </div>
            <img src="https://i0.wp.com/first.global/wp-content/uploads/2023/08/Suriname-2023-.jpg?w=1200&ssl=1" alt="Me when i see GYATT!" class="photo">
            <div class="text">
                Fist Global Singapore 2023 - Robotics Olypics | Student Compeditor/ Robot Engeneer </br></br></br>
                Team Suriname is coming from the world’s most forested country, located in the north-east coast of South America, rich in cultures and ethnicities characterized by a unique harmony. We have taken part in FIRST Global since its inauguration in 2017 without missing one single year. Each time we enrich our team with new students we train in FGC Robotics. Our mission is to empower, build confidence through skills development and inspire opportunities of success for many via our local prep, dedicated mentors’ team and through the FIRST Global platform. This year our student team is representing 4 districts including the capital Paramaribo: </br></br>
                Arnav Chotkan (16): is enthusiastic about robots and computers which led him to the local robotics training and FGC. He is a chess player with a passion for technology and entrepreneurship. He, also loves swimming, programming, gaming, photography and nature.
            </div>
        </div>
    </div>
    <div class="window-column">
        <div class="window" id="w2" hx-ext="client-side-templates" style="max-height:<?php echo rand(36,48); ?>rem">
            <div class="context" >
                <div class="title" hx-on:click="window.open('https://www.facebook.com/147016422001996/photos/de-top-3-go-glo-ers-arnav-chotkhan-66-punten-ay-yi-tjon-a-tham-66-punten-en-gaby/2403715369665412/?paipv=0&eav=AfZZf5Cajy4tXPAekh5jnO3lo8xibrYwkm22hMEoTusqPApIt9HOa7ZMlGNlcpaeoYM&_rdr', '_blank')">2e Nationaal Best Geslaagde Go GLO 2018-2019</div>
                <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close" hx-trigger="click" hx-get="" hx-target="#w2" hx-swap="delete"></div>
            </div>
            <img src="https://scontent.forg2-1.fna.fbcdn.net/v/t1.6435-9/69509671_2403715372998745_8900688807444086784_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=qIQnF2oGc_MQ7kNvgFD1uzS&_nc_ht=scontent.forg2-1.fna&oh=00_AfCy-UoSKYyi9xwfJhaZudJPKlDY5GAA151PT3fZA5TXdQ&oe=665CFC46" alt="Bussines Profiel" class="photo">
            <div class="text">
                De top 3 Go Glo-ers: Arnav Chotkhan (66 punten), Ay-Yi Tjon A Tham (66 punten) en Gaby Karijoikromo (67 punten).
            </div>
        </div>
        <div class="window" id="w2" hx-ext="client-side-templates" style="max-height:<?php echo rand(36,48); ?>rem">
            <div class="context" >
                <div class="title" hx-on:click="window.open('https://m.starnieuws.com/index.php/welcome/index/nieuwsitem/69866', '_blank')">Kampioen Eerste Klasse - Chess 960 - The Battle of Creativity | 2022</div>
                <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close" hx-trigger="click" hx-get="" hx-target="#w2" hx-swap="delete"></div>
            </div>
            <img src="https://scontent.forg2-1.fna.fbcdn.net/v/t39.30808-6/279118394_1634007196982067_6772653710167119964_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=4gPn2qD_eX8Q7kNvgED1PzN&_nc_ht=scontent.forg2-1.fna&oh=00_AfBM0pZaZI6-xbcXrmDOYYN0J_k_VyMnPPanCb-domy_dg&oe=663B5D2F" alt="Bussines Profiel" class="photo">
            <div class="text">
            Het toernooi was onderverdeeld in de masterklasse (18 spelers) en de open klasse (43 spelers). Na ronde negen werden in beide klassen de top 3 bekendgemaakt. In beide klassen hebben de top 3 spelers zeven punten gescoord. De eindrangschikking werd bepaald door de tie-breaks. In de master klasse is Shiva Kalka op de eerste plaats geëindigd, terwijl Arnav Chotkan als eerste eindigde in de open klasse.
            </div>
        </div>
    </div>
    <div class="window-column">
        <div class="window" id="w2" hx-ext="client-side-templates" style="max-height:<?php echo rand(36,48); ?>rem">
            <div class="context" >
                <div class="title">Arnav's Quotes</div>
                <div class="actions"><img src="static/images/icons/011-cancel.png" alt="Close" hx-trigger="click" hx-get="" hx-target="#w2" hx-swap="delete"><img src="static/images/icons/024-write.png" alt="Reload" hx-trigger="load, click" hx-get="cdn/quotes/api/api.php" mustache-template="quoteTemplateQ" hx-target="#quote-text" hx-swap="innerHTML"></div>
            </div>
            <img src="static/images/BussinesPersonalProfile.png" alt="Bussines Profiel" class="photo">
            <div class="text"><div id="quote-text"></div></div>    
            <script id="quoteTemplateQ" type="x-tmpl-mustache">{{quote}} </br></br> - {{author}}</script>
        </div>
    </div>
</div>

