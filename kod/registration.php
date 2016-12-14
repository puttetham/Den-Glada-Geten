
<form id="booking-form" name="booking-form" method="post" action="">
  <input class="text-input" title="Fyll i ditt förnamn" type="text" name="firstname" placeholder="Förnamn" />
  <input class="text-input" title="Fyll i ditt efternamn" type="text" name="lastname" placeholder="Efternamn"  />
  <br />
  <input id="email" class="text-input" title="Fyll i din epost-adress" type="email" name="email" placeholder="E-postadress"  />
  <input class="text-input" title="Bekräfta e-postadress" type="email" name="confirm_email" placeholder="Bekräfta e-postadress"  />

  <div class="activities">
    <h2>Boka en aktivitet!</h2>
      <input type="checkbox" name="activity[]" value="skotersafari"><label>Skotersafari 200 kr</label><br>
      <input type="checkbox" name="activity[]" value="getmatning"><label>Getmatning 100 kr / person</label><br>
      <input type="checkbox" name="activity[]" value="getklappning"><label>Getklappning 50 kr / person</label><br>
      <input type="checkbox" name="activity[]" value="guidad_vandring"><label>Guidad vandring 250 kr / person</label><br>
      <h4>SPA</h4>
      <input type="checkbox" name="activity[]" value="massage"><label>Massage 350 kr</label><br>
      <input type="checkbox" name="activity[]" value="kurbad"><label>Kurbad 250 kr</label><br>
      <input type="checkbox" name="activity[]" value="badtunna"><label>Badtunna 300 kr</label><br>

  </div>
  <br />
  <br />
  <input class="submit boknings-button" type="submit" value="Boka">
</form>
