<div class= "skrivaTips">

    <h2> Tips </h2>
    
    <div class= "parentTips">

        <div class= "tipsUppgifter">
            <form action="./submit.php" method="post">
            <p>Titel:</p>
            <input name="titel" type="text">

            <br>

            <p>Adress:</p>        
            <input name="adress" type="text">
                    
            <br>

            <p>Email:</p>        
            <input name="email" type="email">
                    
            <br>

            <p>Telefonnummer:</p>        
            <input name="telefon" type="tel">
                    
            <br>
                    
            <p> Kategori: </P> 
            <select name="kategori">
                <option value="aktivitet" selected>Aktivitet</option>
                <option value="sevärdighet">Sevärdighet</option>
                <option value="tjänster">Tjänster</option>
                <option value="mat">Mat</option>
            </select>

        </div>

        <div class= "tipsBeskrivning">

           
            <p>Beskrivning:</p>
            <textarea name="beskrivning"></textarea>
            
        </div>

        <input type= "submit"> 
        </form>

    </div>
   


</div>