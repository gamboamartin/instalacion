<?php
namespace html;

use gamboamartin\errores\errores;
use gamboamartin\system\html_controler;
use models\ins_tipo_zona;
use PDO;

class ins_tipo_zona_html extends html_controler {
    public function select_ins_tipo_zona_id(int $cols, bool $con_registros,int $id_selected, PDO $link): array|string
    {
        $modelo = new ins_tipo_zona($link);

        $select = $this->select_catalogo(cols:$cols, con_registros: $con_registros,id_selected:$id_selected, modelo: $modelo);
        if(errores::$error){
            return $this->error->error(mensaje: 'Error al generar select', data: $select);
        }
        return $select;
    }
}
