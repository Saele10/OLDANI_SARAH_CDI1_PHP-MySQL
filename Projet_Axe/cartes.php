<?php
require_once 'haut_page.php';
?>


        <h1>Pokemon Card Collector</h1>
        <h2>You want to collect every pokemon easily, this website is made for you ! Hope you'll enjoy.</h2>

        <!-- les cartes -->
        <section class="cards">
            <!-- Bulbasaur -->
            <div class="carte plant" id="bulbasaur">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/bulbasaur.png" alt="Bulbasaur" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks ">
                    <div class="att">
                        <img src="img/energie/plant.png" alt="plant energie" class="energie">
                        <h3 class="font">Shake Vine</h3>
                        <h3></h3>
                    </div>
                    <p class="description">The Defending Pokemon is now Asleep</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/plant.png" alt="plant energie" class="energie">
                            <img src="img/energie/basic.png" alt="plant energie" class="energie">
                        </div>
                        <h3 class="font">Tackle</h3>
                        <h3 class="degats">10</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/fire.png" alt="fire energie" class="energieWeak">
                    <h6>x2</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">001/151</h6>
                    <h6 class="pokeInfo">There is a plant seed on its back from the day
                        this Pokemon is born. The seed slowly grows larger.
                    </h6>
                </div>
            </div>
            <!-- Charmander -->
            <div class="carte fire" id="charmander">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/charmander.png" alt="Charmander" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/fire.png" alt="fire energie" class="energie">
                        <h3 class="font">Collect</h3>
                        <h3></h3>
                    </div>
                    <p class="description">Draw a card</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/fire.png" alt="fire energie" class="energie">
                            <img src="img/energie/fire.png" alt="fire energie" class="energie">
                        </div>
                        <h3 class="font">Flare</h3>
                        <h3 class="degats font">30</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/water.png" alt="water energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">


                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">004/151</h6>
                    <h6 class="pokeInfo">It has a preference for hot things. When it rains, steam is said to spout
                        from the tip of his tail.</h6>

                </div>

            </div>
            <!-- Squirtle -->
            <div class="carte water" id="squirtle">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/squirtle.png" alt="Squirtle" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/water.png" alt="water energie" class="energie">
                        <h3 class="font">Bubble</h3>
                        <h3 class="degats">10</h3>
                    </div>
                    <p class="description">Flip a coin. If heads, the Defending Pokemon is now Paralyzed</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/water.png" alt="water energie" class="energie">
                            <img src="img/energie/water.png" alt="water energie" class="energie">
                        </div>
                        <h3 class="font">Skull Bash</h3>
                        <h3 class="degats font">20</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/elektrik.png" alt="electrick energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">


                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">007/151</h6>
                    <h6 class="pokeInfo">When it retreats its long neck into its shell, it squirts out water with
                        vigorous force.</h6>
                </div>
            </div>
            <!-- Caterpie -->
            <div class="carte plant" id="caterpie">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/caterpie.png" alt="Caterpie" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Flock</h3>
                        <h3></h3>
                    </div>
                    <p class="description">Search your deck for a Caterpie and put it onto your Bench. Then, shuffle
                        your deck.</p>
                    <div class="att">
                        <img src="img/energie/plant.png" alt="plant energie" class="energie">
                        <h3 class="font">Bug Bite</h3>
                        <h3 class="degats">10</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/fire.png" alt="fire energie" class="energieWeak">
                    <h6>x2</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">010/151</h6>
                    <p class="pokeInfo">Its short feet are tipped with suction pads that enable it to tirelessly climb
                        slopes and walls.</p>
                </div>
            </div>
            <!-- Pikachu -->
            <div class="carte elektrik" id="pikachu">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/pikachu.png" alt="Squirtle" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Growl</h3>
                        <h3></h3>
                    </div>
                    <p class="description">During your opponent's next turn, the Defending okemon's attacks do 20 less
                        damage</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/elektrik.png" alt="electrick energie" class="energie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        </div>
                        <h3 class="font">Pika Bolt</h3>
                        <h3 class="degats">30</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/fight.png" alt="fight energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">


                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">025/151</h6>
                    <h6 class="pokeInfo">When it is angered, it immediately discharges the energy stored in the pouches
                        in its cheeks
                    </h6>
                </div>
            </div>
            <!-- Vulpix -->
            <div class="carte fire" id="vulpix">
                <div class="headInfo">
                </div>
                <img src="img/pokemon/vulpix.png" alt="Vulpix" class="imgCarte">
                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/fire.png" alt="fire energie" class="energie">
                        <h3 class="font">Take Down</h3>
                        <h3 class="degats font">30</h3>
                    </div>
                    <p class="description">This Pokemon also does 10 Damage to itself.</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/fire.png" alt="fire energie" class="energie">
                            <img src="img/energie/fire.png" alt="fire energie" class="energie">
                        </div>
                        <h3 class="font">Live Coal</h3>
                        <h3 class="degats font">40</h3>
                    </div>
                </div>
                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/water.png" alt="water energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>
                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">037/151</h6>
                    <h6 class="pokeInfo">As its body grows larger, its six warm tails become more beautiful,
                        with a more luxurious coat of fur.</h6>
                </div>
            </div>
            <!-- Psyduck -->
            <div class="carte water" id="psyduck">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/psyduck.png" alt="Psyduck" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Headache</h3>
                        <h3 class="degats">10</h3>
                    </div>
                    <p class="description">Your opponent can't use any Supporter cards from their hand during their next
                        turn.</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        </div>
                        <h3 class="font">Stampede</h3>
                        <h3 class="degats font">20</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/elektrik.png" alt="electrick energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">


                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">054/151</h6>
                    <h6 class="pokeInfo">Although possessed of great mental powers, it doesn't know how to use them.
                    </h6>
                </div>
            </div>
            <!-- Krabby -->
            <div class="carte water" id="krabby">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/krabby.png" alt="Krabby" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Aqua Shower</h3>
                        <h3 class="degats"></h3>
                    </div>
                    <p class="description">This attack does 10 Damage to each of your opponent's Pokemon.</p>

                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/water.png" alt="water energie" class="energie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        </div>
                        <h3 class="font">Vice Grip</h3>
                        <h3 class="degats font">20</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/plant.png" alt="plant energie" class="energieWeak">
                    <h6>x2</h5>
                        <h6 class="resist">resistance</h6>
                        <h6 class="retreat">retreat</h6>
                        <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">


                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">098/151</h6>
                    <h6 class="pokeInfo">If it senses danger approaching, it cloaks itself with bubbles from it's mouth
                        so it will look bigger.</h6>
                </div>
            </div>
            <!-- Hitmonlee -->
            <div class="carte fight" id="hitmonlee">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/hitmonlee.png" alt="Hitmonlee" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/fight.png" alt="fight energie" class="energie">
                        <h3 class="font">Stretch Kick</h3>
                        <h3></h3>
                    </div>
                    <p class="description">This attack does 30 damage to 1 of your opponent's Benched Pokemon</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/fight.png" alt="fight energie" class="energie">
                            <img src="img/energie/fight.png" alt="fight energie" class="energie">
                        </div>
                        <h3 class="font">Spiral Kick</h3>
                        <h3 class="degats">30</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/psy.png" alt="psy energie" class="energieWeak">
                    <h6>x2</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">106/151</h6>
                    <p class="pokeInfo">The legs freely contract and stretch. the stretchy legs allow it to hit a
                        distant foe with a rising kick.
                    </p>
                </div>
            </div>
            <!-- Jynx -->
            <div class="carte water" id="jynx">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/jynx.png" alt="Jynx" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Double Draw</h3>
                        <h3></h3>
                    </div>
                    <p class="description">Draw 2 cards. </p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/water.png" alt="basic energie" class="energie">
                        </div>

                        <h3 class="font">Icy Snow</h3>
                        <h3 class="degats">30</h3>
                    </div>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/psy.png" alt="psy energie" class="energieWeak">
                    <h6>x2</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">124/151</h6>
                    <p class="pokeInfo">It wiggles its hips as it walks. It can cause people to dance in union with it.
                    </p>
                </div>
            </div>
            <!-- Eevee -->
            <div class="carte basic" id="eevee">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/eevee.png" alt="Eevee" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        <h3 class="font">Curisity</h3>
                        <h3></h3>
                    </div>
                    <p class="description">Your opponent reveals their hand.</p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                            <img src="img/energie/basic.png" alt="basic energie" class="energie">
                        </div>

                        <h3 class="font">Spin Tackle</h3>
                        <h3 class="degats">30</h3>
                    </div>
                    <p class="description">Flip a coin. If tails, this Pokemon does 10 damage to itself.</p>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <img src="img/energie/fight.png" alt="fight energie" class="energieWeak">
                    <h6>x2</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">133/151</h6>
                    <p class="pokeInfo"> The question of why only Eevee has such unstable genes has still not been
                        solved
                    </p>
                </div>
            </div>
            <!-- Dratini -->
            <div class="carte dragon" id="dratini">
                <div class="headInfo">
                </div>

                <img src="img/pokemon/dratini.png" alt="Dratini" class="imgCarte">

                <!-- liste attaques -->
                <div class="attacks">
                    <div class="att">
                        <img src="img/energie/water.png" alt="basic energie" class="energie">
                        <h3 class="font">Beat</h3>
                        <h3></h3>
                    </div>
                    <p class="description">Draw 2 cards. </p>
                    <div class="att">
                        <div class="Denergie">
                            <img src="img/energie/water.png" alt="water energie" class="energie">
                            <img src="img/energie/elektrik.png" alt="electrick energie" class="energie">
                        </div>

                        <h3 class="font">Draconic Whip</h3>
                        <h3 class="degats">40</h3>
                    </div>
                    <p class="description">Your opponent's Active Pokemon is now Confused</p>
                </div>

                <div class="weakRetreat">
                    <h6>weakness</h6>
                    <h6 class="resist">resistance</h6>
                    <h6 class="retreat">retreat</h6>
                    <img src="img/energie/basic.png" alt="basic energie" class="energieWeak">
                </div>

                <!-- footer cartes -->
                <div class="footerCarte">
                    <h6 class="numberPoke">147/151</h6>
                    <p class="pokeInfo">It sheds many layers of skin as it grows larger. During this process, it is
                        protected by a rapid waterfall.
                    </p>
                </div>
            </div>
        </section>

<?php
require_once 'bas_page.php';
?>