<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="./css/MiseEnPage.css" rel="stylesheet" />
    <title>ENI Encheres - Accueil</title>
  </head>
  <body>
    <!-------------------------------------------------------------- NAVIGATION ------------------------------>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">ENI - ENCHERES</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <!-- UNLOGGED MENU -->
            <li class="nav-item">
              <a class="nav-link" href="/profil/connexion.html"
                >Me connecter / M'inscrire</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-------------------------------------------------------------- MAIN ------------------------------>
    <main>
      <header>
        <h1>LISTE DES ENCHERES</h1>
        <hr />
        <!-- Filtres de recherche -->
        <section class="flexblock m_1em">
          <p>Filtrer les annonces :</p>
          <form class="flexblock" action="index.html" method="GET">
            <div class="flexline">
              <label for="filter-search">Rechercher :</label>
              <input
                type="text"
                name="filter-search"
                id="filter-search"
                placeholder="Filtrer par mot-clé..."
              />
            </div>
            <!-- Catégorie -->
            <div class="flexline">
              <label for="categorie_article" class="form-label"
                >Catégorie</label
              >
              <select
                class="form-select"
                aria-label="Catégorie de votre article"
                id="categorie_article"
                name="categorie"
                required
              >
                <option value="" disabled selected hidden>
                  Veuillez choisir la catégorie...
                </option>
                <option value="ameublement">Ameublement</option>
                <option value="art">Art</option>
                <option value="cuisine">Cuisine</option>
                <option value="multimedia">Multimédia</option>
                <option value="jeux_jouets">Jeux et jouets</option>
                <option value="vetements">Vêtements</option>
              </select>
              <button type="submit" class="btn btn-secondary">
                Lancer la recherche
              </button>
            </div>
          </form>
        </section>
      </header>
      <section>
        <ul class="grid_list list_nodecor">
          <li class="article_card">
            <!-- Article card -->

            <img
              src="uploads/articles_vendus/Wroclaw-11.jpg"
              alt="Photo d'une affiche représentant Charles Mingus en dessin"
            />
            <div class="flexcol m_1em">
              <h1>Photo d'une affiche représentant Charles Mingus</h1>
              <span>dans <a href="/categories/art">Art</a></span>
              <hr />
              <p>
                Vendeur : <a href="profil/profil_display.html">JojoLaFrite</a>
              </p>
              <p>Prix: 850p</p>
              <p>Fin des enchères: 31/12/2021</p>
              <p>
                Retrait à: <br />
                Petit Village Auvergnat - 63578
              </p>
            </div>
          </li>
          <li class="article_card">
            <!-- Article card -->

            <img
              src="uploads/articles_vendus/Wroclaw-11.jpg"
              alt="Photo d'une affiche représentant Charles Mingus en dessin"
            />
            <div class="flexcol m_1em">
              <h1>Photo d'une affiche représentant Charles Mingus</h1>
              <span>dans <a href="/categories/art">Art</a></span>
              <hr />
              <p>
                Vendeur : <a href="profil/profil_display.html">JojoLaFrite</a>
              </p>
              <p>Prix: 850p</p>
              <p>Fin des enchères: 31/12/2021</p>
              <p>
                Retrait à: <br />
                Petit Village Auvergnat - 63578
              </p>
            </div>
          </li>
          <li class="article_card">
            <!-- Article card -->

            <img
              src="uploads/articles_vendus/Wroclaw-11.jpg"
              alt="Photo d'une affiche représentant Charles Mingus en dessin"
            />
            <div class="flexcol m_1em">
              <h1>Photo d'une affiche représentant Charles Mingus</h1>
              <span>dans <a href="/categories/art">Art</a></span>
              <hr />
              <p>
                Vendeur : <a href="profil/profil_display.html">JojoLaFrite</a>
              </p>
              <p>Prix: 850p</p>
              <p>Fin des enchères: 31/12/2021</p>
              <p>
                Retrait à: <br />
                Petit Village Auvergnat - 63578
              </p>
            </div>
          </li>
        </ul>
      </section>
    </main>

    <!-------------------------------------------------------------- FOOTER ------------------------------>

    <footer>
      <p>&copy;2021 TrocEnchères | Jo Riviera</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
