<header class="header">
    <div class="container_lefttop">
        <div class="btn">
            <button class="back-btn" onclick="history.back()" style="border: none; background: transparent; cursor: pointer;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </button>
        </div>
        
        <div id="divider" style="width: 1px; height: 30px; background: #ccc; margin: 0 15px;"></div>
        
        <div class="logo-IFBA">
            <img src="../../IMG/img_login/MARCA_IFBA_VERTICAL_CMYK_IFBA.png" alt="IFBA" style="height: 45px; width: auto;">
        </div>
        
        <div class="header_text" style="display: flex; flex-direction: column; justify-content: center; margin-left: 10px;">
            <p id="text_top" style="margin: 0; line-height: 1.2 !important; font-size: 18px; font-weight: bold; color: #19191C; font-family: 'Poppins', sans-serif;">Almoxarifado</p>
            <p id="text_bellow" style="margin: 0; line-height: 1.2 !important; font-size: 14px; color: #666; font-family: 'Poppins', sans-serif;">Sistema Web</p>
        </div>
    </div>

    <menu class="menu" style="display: flex; align-items: center; gap: 30px;">
        <ul class="container_menu" style="display: flex; list-style: none; gap: 25px; padding: 0; margin: 0;">
            
            <li class="item_top">
                <a href="home.php" title="Início" style="text-decoration: none; display: flex; align-items: center; justify-content: center; color: #135911; padding: 8px; border-radius: 50%; transition: 0.3s;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </a>
            </li>

            <li class="item_top">
                <a href="../../PHP/PRODUTO/listar_prod.php" title="Gerenciar Estoque" style="text-decoration: none; display: flex; align-items: center; justify-content: center; color: #135911; padding: 8px; border-radius: 50%; transition: 0.3s;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                </a>
            </li>

            <li class="item_top">
                <a href="../../PHP/user/logout.php" title="Sair" style="text-decoration: none; display: flex; align-items: center; justify-content: center; color: #dc3545; padding: 8px; border-radius: 50%; transition: 0.3s;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </a>
            </li>
        </ul>

        <div class="container_profile_timer" style="display: flex; align-items: center; gap: 10px;">
            <div id="timer" style="background: #eee; padding: 5px 15px; border-radius: 15px; font-size: 14px;">
                <span style="font-weight: bold; color: #135911;">
                    <?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : 'Olá'; ?>
                </span>
            </div>
            <div class="profile" style="width: 35px; height: 35px; background: #ccc; border-radius: 50%;"></div>
        </div>
    </menu>
</header>