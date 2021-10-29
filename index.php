<?php 

// Provate ad immaginare quali sono le classi necessarie per creare uno shop online.
// Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario.
// Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
// oppure diverse tipologie di prodotti.


// BONUS:
// Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
//         $c = new CreditCard(..);
//         $user->insertCreditCard($c);
// 2.    Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).

   require_once 'Product.php';    
   require_once 'User.php';    

   $usr = new User('Paolo','p@email.com');

   var_dump($usr);

   $pr_usr = new UserPremium('Paolo','p@email.com', 300 );

   var_dump($pr_usr);

   $prod = new Product('pc',1000);

   var_dump($prod);

   $prod_usr=$prod->price;

   $prod_pr=$prod->getDiscountedPrice($pr_usr->discount);

   echo 'Prezzo base: '.$prod_usr;

   echo '<br>';

   echo 'Prezzo premium: '.$prod_pr;

?>