<?php
$config = array(
    "nuevoContacto" => array(
        array(
            "field" => "nombre",
            "label" => "nombre",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Debe indicar su nombre'
            )
        ),
        array(
            "field" => "apellido",
            "label" => "apellido",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Debe indicar su apellido'
            )
        ),
        array(
            "field" => "email",
            "label" => "email",
            "rules" => "trim|required|valid_email",
            "errors" => array(
                'required' => 'Debe indicar na dirección de correo electrónico de contacto',
                'valid_email' => 'La dirección de correo ingresado no es válida.'
            )
        ),
        array(
            "field" => "telefono",
            "label" => "telefono",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Debe indicarnos un teléfono de contacto'
            )
        ),
        array(
            "field" => "empresa",
            "label" => "empresa",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Por favor, cuéntenos de qué empresa nos contacta'
            )
        ),
        array(
            "field" => "consulta",
            "label" => "consulta",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Por favor, redáctenos su consulta'
            )
        )
    ),
    "subidaCV" => array(
        array(
            "field" => "nombre",
            "label" => "nombre",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Debe indicarnos su nombre para aplicar'
            )
        ),
        array(
            "field" => "apellido",
            "label" => "apellido",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Debe ingresar su apellido para aplicar'
            )
        ),
        array(
            "field" => "mail",
            "label" => "mail",
            "rules" => "trim|required|valid_email",
            "errors" => array(
                'required' => 'Debe indicar una dirección de correo electrónico de contacto',
                'valid_email' => 'La dirección de correo ingresada no parece válida'
            )
        ),
        array(
            "field" => "presentacion",
            "label" => "presentacion",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'Por favor, escribanos una breve introducción sobre su perfil profesional'
            )
        )
    ),
    'nuevoArchivo' => array(
        array(
            "field" => "categoria",
            "label" => "La categoria",
            "rules" => "trim|required",
            "errors" => array(
                'required' => 'La categoria es un campo requerido'
            )
        )
    ),
    "nuevaCategoria" => array(
            array(
                "field" => "nombreCategoria",
                "label" => "Nombre de la categoria",
                "rules" => "trim|required|is_unique[Categorias.nombre]",
                "errors" => array(
                    'required' => 'Debe especificar el nombre de la categoria a crear',
                    'is_unique' => 'Ya existe una categoria con ese nombre'
                )
            )
        )
);