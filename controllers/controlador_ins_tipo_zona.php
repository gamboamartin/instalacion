<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace gamboamartin\instalacion\controllers;
use gamboamartin\system\links_menu;
use gamboamartin\system\system;
use gamboamartin\template\html;
use html\ins_tipo_zona_html;
use models\ins_tipo_zona;
use PDO;
use stdClass;

class controlador_ins_tipo_zona extends system {

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $modelo = new ins_tipo_zona(link: $link);
        $html_base = new html();
        $html = new ins_tipo_zona_html(html: $html_base);
        $obj_link = new links_menu($this->registro_id);
        parent::__construct(html:$html, link: $link,modelo:  $modelo, obj_link: $obj_link, paths_conf: $paths_conf);

        $this->titulo_lista = 'Tipo Zona';

    }
}
