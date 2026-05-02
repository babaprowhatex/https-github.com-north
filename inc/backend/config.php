<?php
if (empty($_SESSION)){session_start();}
$conn = new mysqli("localhost", "root", "", "sxware");
if ($conn->connect_error) {
  header("Location: bakim.jsp");
}
$stmt = $conn->prepare(sprintf("SELECT * FROM users WHERE token = ?"));
$stmt->bind_param('s', $_SESSION["token"]);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->num_rows;
$user = $result->fetch_assoc();
$admin = $user["admin"];

$one->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$one->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$one->inc_header                 = 'inc/backend/views/inc_header.php';
$one->inc_footer                 = 'inc/backend/views/inc_footer.php';
$one->l_m_content                = 'narrow';



$one->main_nav                   = array(

    array(
        'name'  => 'Ana Sayfa',
        'icon'  => 'si si-speedometer',
        'url'   => 'dashboard.jsp'
    ),   
    array(
        'name'  => 'Mernis 2023',
        'icon'  => 'fa fa-id-card',
        'sub'   => array(
            array(
                'name'  => 'Ad Soyad',
           
                'url'   => 'ad-soyad.jsp'
            ),
            array(
                'name'  => 'Ad Soyad Filtreli',
            
                'url'   => 'ad-soyad2.jsp'
            ),
            array(
                'name'  => 'TC Sorgu',
                'url'   => 'tcsorgu.jsp'
				 ),
            array(
                'name'  => 'Tc Pro Sorgu',
                'url'   => 'tcpro.jsp'
				 ),
            array(
                'name'  => 'Tc Plus Sorgu (Seri No)',
                'url'   => 'tcplus.jsp'       
            ), 
			array(
                'name'  => 'Aöl Sorgu',
                'url'   => 'aolsorgu.jsp'
            ),  
            array(
                'name'  => '-18 Vesika Sorgu',
                'url'   => 'vesika.jsp'
            ),
            array(
                'name'  => 'Okul No Sorgu',
                'url'   => 'eokul.jsp'
				 ),
            array(
                'name'  => 'Ehliyet Vesika Sorgu',
                'url'   => 'ehliyetvesika.jsp'       
            ),  
            array(
                'name'  => 'Adres Sorgu',
                'url'   => 'adres-sorgu.jsp'
		    ),  
            array(
                'name'  => 'Araç Sorgu',
                'url'   => 'arac.jsp'
            ),
        )
    ),    
    
    array(
        'name'  => 'Aile',
        'icon'  => 'fa fa-hospital-user',
        'sub'   => array(            
             array(
                'name'  => 'Aile Sorgu',
                'url'   => 'ailesorgu.jsp'
            ),
            array(
                'name'  => 'Sülale Sorgu',
                'url'   => 'akraba-sorgu.jsp'
            ),          
        )
    ),    

array(
        'name'  => 'Telefon',
        'icon'  => 'fa fa-phone        ',
        'sub'   => array(            
            array(
                'name'  => 'TC -> GSM',
                'url'   => 'tcgsm-sorgu.jsp'
            ),
            array(
                'name'  => 'GSM -> TC',
                'url'   => 'gsm-sorgu.jsp'
            ),          			
        )
    ),    
array(
        'name'  => 'Diğer',
        'icon'  => 'fa fa-gear',
        'sub'   => array(
			array(
                'name'  => 'CC Data Düzeltici',
                'url'   => 'data-duzenle.jsp'
            ),
            	array(
                'name'  => 'SMS Bombala',
                'url'   => 'smsbomber.jsp'
            ),
            	
            array(
                'name'  => 'EGM İhbar',
                'url'   => 'ihbar.jsp'
            ),
            
        )
    ),
	    array(
        'name'  => 'Telegram Kanalımız',
        'icon'  => 'fa-solid fa-link',
        'url'   => 'https://t.me/marlexcheck'
    ), 	
);
	if ($admin == 1){
		$ar1 = array(
			'name'  => 'Yönetici Sistemi',
			'type'  => 'heading'
		);
		$ar2 = array(
			'name'  => 'Yönetim',
			'icon'  => 'fa-solid fa-terminal',
			'sub'   => array(
				array(
					'name'  => 'Kullanıcılar',
					'url'   => 'kullanicilar.jsp'
				),
				array(
					'name'  => 'Paket Tanımla',
					'url'   => 'paket-tanimla.jsp'
				),
				array(
					'name'  => 'Paket Sil',
					'url'   => 'paket-sil.jsp'
				)
			)
		);
		$ar4 = array(
			'name'  => 'Sistem',
			'icon'  => 'fas fa-server',
			'sub'   => array(
				array(
					'name'  => 'Uyarılar',
					'url'   => 'uyarilar.jsp'
				),
				array(
					'name'  => 'Hatalar',
					'url'   => 'hatalar.jsp'
				),
				array(
					'name'  => 'Hareketler',
					'url'   => 'hareketler.jsp'
				),
				array(
					'name'  => 'Giriş Kayıtları',
					'url'   => 'girisler.jsp'
				),
				array(
					'name'  => 'Sorgulamalar',
					'url'   => 'sorgular.jsp'
				),
				array(
					'name'  => 'CCV Kayıtları',
					'url'   => 'ccv-kayit.jsp'
				),
				array(
					'name'  => 'Admin Hareketleri',
					'url'   => 'admin-kayit.jsp'
				)
			)
		);
		$ar3 = array(
			'name'  => 'İŞLEMLER',
			'type'  => 'heading'
		);
		array_unshift($one->main_nav, $ar3);
		array_unshift($one->main_nav, $ar4);
		array_unshift($one->main_nav, $ar2);
		array_unshift($one->main_nav, $ar1);
		
	}
