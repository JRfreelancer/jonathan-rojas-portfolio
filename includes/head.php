<?php
// =========================================================================
// CONFIGURACIÓN DE VARIABLES PHP (Valores por defecto con Null Coalesce)
// =========================================================================

$dominio     = "https://jonathanrojas.com";

$titulo      = $titulo      ?? "Jonathan Rojas | Diseñador Web, UI/UX y SEO";
$descripcion = $descripcion ?? "Jonathan Rojas, diseñador web, desarrollador front-end y diseñador gráfico especializado en crear sitios web modernos, optimizados para SEO.";
$autor       = $autor       ?? "Jonathan Rojas";
$keywords    = $keywords    ?? "";
$imagen      = $imagen      ?? "$dominio/assets/img/preview.webp";
$canonical   = $canonical   ?? $dominio;
?>
<!doctype html>
<!-- Indica al navegador que el documento utiliza la especificación HTML5 -->
<html lang="es">

<head>
    <!-- =========================================================================
         METADATOS TÉCNICOS Y CONFIGURACIÓN BÁSICA
         ========================================================================= -->
    <!-- Define la codificación de caracteres universal (soporta tildes y eñes) -->
    <meta charset="UTF-8">

    <!-- Configura la ventana gráfica para adaptabilidad nativa (Responsive Design) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Metadatos de compatibilidad y comportamiento en aplicaciones móviles/PWA -->
    <meta name="application-name" content="Jonathan Rojas">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Jonathan Rojas">

    <!-- Color estético de interfaz para barras de direcciones en navegadores móviles -->
    <meta name="theme-color" content="#020817">

    <link rel="preload"
        href="assets/css/styles.css"
        as="style">

    <!-- =========================================================================
         METADATOS S.E.O. (Posicionamiento en Motores de Búsqueda)
         ========================================================================= -->
    <!-- Título indexable de la pestaña del navegador -->
    <title><?= $titulo ?></title>

    <!-- Snippet descriptivo para los resultados de búsqueda (Google, Bing) -->
    <meta name="description" content="<?= $descripcion ?>">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <meta name="color-scheme" content="dark light">

    <!-- Palabras clave informativas de la página -->
    <meta name="keywords" content="<?= $keywords ?>">

    <!-- Autor legal del sitio web -->
    <meta name="author" content="<?= $autor ?>">

    <!-- Directivas estrictas para robots indexadores (Rastrear y seguir enlaces) -->
    <meta name="robots" content="index,follow,max-image-preview:large">

    <!-- URL canónica oficial que consolida la autoridad y evita contenido duplicado -->
    <link rel="canonical" href="<?= $canonical ?>">

    <!-- =========================================================================
         PROTOCOLO OPEN GRAPH (Optimización para Facebook, WhatsApp, LinkedIn)
         ========================================================================= -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Jonathan Rojas">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:title" content="<?= $titulo ?>">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:image" content="<?= $imagen ?>">
    <meta property="og:image:alt" content="Portafolio de Jonathan Rojas">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/webp">

    <!-- =========================================================================
         TWITTER CARDS (Optimización exclusiva para Twitter / X)
         ========================================================================= -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $titulo ?>">
    <meta name="twitter:description" content="<?= $descripcion ?>">
    <meta name="twitter:image" content="<?= $imagen ?>">
    <meta name="twitter:image:alt" content="Portafolio de Jonathan Rojas">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="630">

    <!-- =========================================================================
         OPTIMIZACIÓN DE CARGA Y RENDIMIENTO (Preconnect y Prefetch)
         ========================================================================= -->
    <!-- Preconecta con CDNs externos para acelerar la resolución de descargas -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Resuelve la IP del servidor de archivos de forma anticipada (DNS Prefetch) -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- =========================================================================
         ICONOS DE LA APLICACIÓN Y MANIFIESTO PWA
         ========================================================================= -->
    <!-- CORRECCIÓN: Unificación de rutas de favicons bajo la carpeta assets/favicon/ -->
    <link rel="icon" href="assets/favicon/icono_64_x_64_fondo_blanco.png" type="image/png">
    <link rel="icon" href="assets/favicon/icono_32_x_32_fondo_blanco.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/favicon/icono_192_x_192_fondo_blanco.png" sizes="192x192" type="image/png">
    <link rel="apple-touch-icon" href="assets/favicon/icono_180_x_180_fondo_blanco.png">

    <!-- CORRECCIÓN: Ubicación semántica del archivo de manifiesto de la aplicación -->
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <!-- =========================================================================
         ESTILOS CSS (Frameworks, Fuentes y Personalizados)
         ========================================================================= -->
    <!-- Bootstrap 5 Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Google Fonts: Inter y Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- CORRECCIÓN: Conversión de ruta hardcodeada local a ruta dinámica/relativa para portabilidad -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- =========================================================================
         DATOS ESTRUCTURADOS / SEO TÉCNICO (Schema JSON-LD)
         ========================================================================= -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "<?= $autor ?>",
            "jobTitle": "Diseñador Web y SEO",
            "url": "<?= $canonical ?>",
            "image": "<?= $imagen ?>",
            "sameAs": []
            "knowsAbout": [
                "Desarrollo Web",
                "SEO",
                "UI",
                "UX",
                "Diseño Gráfico"
            ]
            "email"
            "telephone"
            "address"
            "worksFor"
            "hasOccupation"
            "sameAs"
        }
    </script>
</head>