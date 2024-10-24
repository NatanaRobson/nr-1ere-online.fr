<!-- HEAD -->
<?php
include "./fragments/head.php";
?>
<!-- variables -->
<?php
$Natana = new Personne("ROBSON", "Natana");
$Natana->set_details("tel","06 16 09 25 90");
$Natana->set_details("adresse","2, La Grenouillère 36 160 Pérassay FRANCE");
// var_dump($Natana->get_details());
?>
<!-- CV -->
 <div class="cv">
    <div class="id">
        <div class="photo identifiants">
            <img src="./images/Photo.png" alt="" class="photo-id">
        </div>
        <div class="coordonnees identifiants">
            <span>Nom : <?=$Natana->get_nom()?></span>
            <br>
            <span>Prénom : <?=$Natana->get_prenom()?></span>
            <br>
            <span>Adresse : <?=$Natana->get_details()["adresse"]?></span>
            <br>
            <span>Tél : <?=$Natana->get_details()["tel"]?></span>
        </div>
    </div>
    <h1>Développeur Web</h1>
    <h2>Diplômes</h2>
    <p class="diplomes">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut nulla deserunt ipsam quas. Labore error minima autem, quasi neque accusamus necessitatibus ipsam quod quo, magni aliquam odio, et dolore eius provident veniam est eligendi laboriosam quos libero! Aperiam commodi ex placeat quod error, nostrum voluptate veritatis fugiat ipsam, quae vel fuga modi quam, doloremque minima sequi! Quo porro exercitationem ad iste distinctio beatae nisi, rem deserunt totam eos rerum at, ex esse cupiditate corporis! Incidunt cum minima quasi soluta ex iusto id corporis. Similique fuga dolores laborum fugit hic vel ab quod odio tempora saepe. Vitae explicabo dolorum eveniet! Illum soluta omnis quasi. Quisquam temporibus ratione ipsum, voluptatem quasi optio provident dolores id repellat facere? Sed id adipisci fuga asperiores suscipit rem voluptatibus cupiditate deserunt rerum laborum a numquam ducimus qui, ipsum facilis vitae doloribus aliquid incidunt reiciendis nobis? Iste odio fuga vel ullam qui vitae quos quam et minus.
    /p>
    <h2>Expériences</h2>
    <p class="experiences">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima id, sapiente quis maiores minus sit quaerat, nostrum eos ipsum distinctio totam velit vitae cum provident corrupti voluptatum aperiam possimus quasi voluptas optio esse inventore pariatur ea! Inventore quis hic repudiandae totam aliquam possimus aperiam natus rerum aspernatur obcaecati qui, fugiat deleniti tempore explicabo ullam quas eius doloremque iure error minus, voluptates, esse deserunt maiores. Labore corporis sit minus consequatur assumenda ipsum magni optio quis magnam, molestias vitae nesciunt sunt cupiditate, praesentium quibusdam, nihil odio at hic! Aperiam at, architecto qui dolore iste totam ipsam exercitationem dolorum veniam officia iure expedita odio aliquam rerum accusantium! Autem obcaecati maiores animi porro nobis. Cupiditate, ea libero? Quaerat, aut quidem! Rem eveniet dolor culpa animi nam qui ducimus pariatur quaerat incidunt voluptatum sapiente quam facere vel itaque, ipsa labore tenetur eaque autem obcaecati cupiditate dolorem recusandae a, dignissimos fugiat? Deleniti quod magni repellat officiis.
    </p>
 </div>
 <!-- FOOTER -->
<?php
include "./fragments/footer.php";
?>
