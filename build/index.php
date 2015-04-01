<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <title>Who should I vote for?</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="a/css/style.css" />

</head>
<body class="no-js">
  
  <div class="page">
        
    <h1>Who should I vote for?</h1>    
    
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
      
      <?php $punch = htmlspecialchars(@$_POST['punch'], ENT_QUOTES); ?>
      
      <p>Our complex personal profile algorithm suggests you vote for:</p>
      
      <div class="result">                  
        
        <div class="result__who">
          
          <?php if ($punch=='yes') : ?>
          
            <h2>Any party</h2>
            
            <p>At least one policy that all parties will likely deliver on will be the equivalent to a punch to the face, so you can't go wrong.</p>
            
            <p>However, voting UKIP will be the equivalent 12 rounds with Tyson.</p>
            
          <?php elseif ($punch=='no') : ?>
            
            <h2>"None of the above"</h2>                      
            
            <p>The only hope of avoiding a punch to the face is to vote for no-one. Just put your full name and a cross on the ballot paper.</p>
            
            <p>Unfortunately, there are enough people who like being punched in the face that their votes will most likely ensure you get a right hook.</p>
            
            <p>Welcome to democracy.</p>                    
          
          <?php else : ?>
            
            <h2>Some professional help</h2>
            
            <p>Come on, if you won't even commit to whether you like/dislike a punch to the face, you may have bigger problems than deciding who to vote for.</p>
            
            <p>Or you are a developer testing my code. I hope it passed.</p>            
            
          <?php endif; ?>
          
          <p><a class="btn" href="/">Start again</a></p>
          
        </div><!--/result__who-->                        
        
      </div><!--/result-->
      
      <hr />
    
      <div class="dickclaimer">      
        <p><small>Voting is definitely a connundrum but you absolutely <strong>should</strong> vote.<br /> Not voting at all is like voting for all of them, which is about the absolute worst choice you could make.<br /> Except if you vote UKIP. That is even worsterer.</small></p>
        <p><small><a href="http://en.wikipedia.org/wiki/List_of_political_parties_in_the_United_Kingdom">Find out more about UK political parties</a></small></p>
        <p><small>In case of <abbr title="No Sense Of Humour">NSOH</abbr> syndrome, please note this website is satirical and should be treated accordingly. Please direct any/all abuse to <a href="http://twitter.com/iamkeir">@iamkeir</a>.</small></p>
      </div><!--/dickclaimer-->
      
      <!-- Extra disclaimer: this is a satirical website and all opinions are my own. I do not advocate any form of abuse or violence towards anyone whatsoever. Even politicians. -->
      
    <?php else : ?>
      
      <p>If you are not sure who should get your vote, take our short questionnaire to help you decide.</p>
      
      <form id="f-vote" action="/" method="POST">
      
        <fieldset class="form__group">
        
          <legend>Do you like getting punched in the face?</legend>
        
          <label class="form__item"><input type="radio" name="punch" value="yes" /> Yes</label>
          <label class="form__item"><input type="radio" name="punch" value="no" /> No</label>
      
        </fieldset><!--/form__group-->
      
        <div class="form__action">
          <button type="submit">Next</button>
        </div><!--/form__action-->
        
      </form><!--/f-vote-->
    
    <?php endif; ?>
      
  </div><!--/page-->

  <!-- @TODO: Google Analytics -->

</body>
</html>
