<section class="search" aria-label="Buscar alojamiento">
  <div class="container">
    <form class="search-form" action="alojamientos.php" method="get">
      <div class="field">
        <label for="destino">Destino</label>
        <select class="select" id="destino" name="destino">
          <option value="">Toda la Costa Blanca</option>
          <option>Alicante</option>
          <option>Benidorm</option>
          <option>Calpe</option>
          <option>Jávea</option>
          <option>Torrevieja</option>
        </select>
      </div>
      <div class="field">
        <label for="llegada">Llegada</label>
        <input class="input" type="date" id="llegada" name="llegada">
      </div>
      <div class="field">
        <label for="salida">Salida</label>
        <input class="input" type="date" id="salida" name="salida">
      </div>
      <div class="field">
        <label for="huespedes">Huéspedes</label>
        <input class="input" type="number" id="huespedes" name="huespedes" min="1" max="16" value="2">
      </div>
      <button class="btn btn--primary" type="submit">Buscar alojamiento</button>
    </form>
  </div>
</section>
