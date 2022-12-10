<!DOCTYPE html>
<html>
  <head>
    <title>Bio Concept</title>
    <meta name="description" content="This is the description" />
    <link rel="stylesheet" href="Home.css" />
    <script src="carrinho.js" async></script>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  </head>
  <body>
    <!--começo nav bar-->
    <header>
      <nav class="navigation">
        <img src="img/logo.png" alt="logo" class="imagem" />
        <img src="img/bioconcept.png" alt="nome" class="nome-img" />

        <ul class="nav-menu">
          <li class="nav-item">
            <a href="cadastroProduto.php">Cadastrar Produto</a>
          </li>
          <img src="img/sair.png" alt="sair" class="sair" />
          <li class="nav-item"><a href="sair.php">Sair</a></li>
        </ul>
        <div class="menu">
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </header>
    <!--fim nav bar-->

    <!--banner-->
    <img src="img/2.png" alt="img" id="banner" /> <br />
    <!--/banner-->

    <!--cards-->
    <section class="container content-section">
      <h2 class="section-header">Novidades</h2>
      <div class="shop-items">
        <div class="shop-item">
          <img class="shop-item-image" src="img/calca.png" />
          <div class="shop-item-details">
            <span class="shop-item-title">Calça Jeans Cargo</span><br /><br>
            <span class="shop-item-price">$70.00</span><br />
            <button class="btn btn-primary shop-item-button" type="button">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
        <div class="shop-item">
          <img class="shop-item-image" src="img/nezuko.png" />
          <div class="shop-item-details">
            <span class="shop-item-title">Moletom Nezuko</span><br /><br>
            <span class="shop-item-price">$80.00</span><br />
            <button class="btn btn-primary shop-item-button" type="button">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
        <div class="shop-item">
          <img class="shop-item-image" src="img/camiseta remove.png" /><br>
          <div class="shop-item-details">
            <span class="shop-item-title">Camiseta Steven Universo</span><br /><br>
            <span class="shop-item-price">$39.99</span><br />
            <button class="btn btn-primary shop-item-button" type="button">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
        <div class="shop-item">
          <div class="img">
            <img class="shop-item-image" src="img/macacao.jpg" />
          </div>

          <div class="shop-item-details">
            <span class="shop-item-title">Macacão Jeans</span>
            <br /><br>
            <span class="shop-item-price">$60.00</span><br />
            <button class="btn btn-primary shop-item-button" type="button">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
    </section>
    <!--/banner-->

    <!--carrinho de compras-->
    <section class="container content-section">
      <div class="car">
      <h2 class="section-head">Carrinho</h2>
      <div class="cart-row">
        <span class="cart-item cart-header cart-column">Peça</span>
        <span class="cart-price cart-header cart-column">Preço</span>
        <span class="cart-quantity cart-header cart-column">Quantidade</span>
      </div>
      <div class="cart-items"></div>
      <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$0</span>
      </div>
      <button class="btn btn-primary btn-purchase" type="button">
        Comprar
      </button>
      </div>
    </section>
    <!--/carrinho de compras-->
  </body>
</html>
