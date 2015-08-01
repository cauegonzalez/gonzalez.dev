<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * creates an array of all posts
     *
     * @return array
     */
    public function montaArray()
    {
        $arrayPosts = array();
        $post = array(
                'id'          => 0,
                'title'       => "Gerando PDF com Snappy",
                'title-link'  => "gerando-pdf-com-snappy",
                'date'        => "01 de Agosto de 2015",
                'content'     => "<strong>Sobre a Snappy</strong><br />
                                        O Snappy é uma biblioteca PHP (5+) para geração de thumbnail, snapshot ou PDF de uma URL ou página HTML. Funciona como um wrapper
                                        sobre o wkhtmltopdf (que também tem a wkhtmltoimage).<br />
                                        O wkhtmltopdf é uma ferramenta de linha de comando Open-source (LGPLv3) que utiliza o motor QT WebKit (motor do Chrome, Safari,
                                        Opera e etc), para conversão/renderização de HTML em PDF ou imagens. E funciona em Linux, OSX e Windows.<br />
                                        Então para o Snappy funcionar, você precisa instalar ele no seu sistema operacional.<br />
                                        <a href='http://www.schoolofnet.com/2015/07/gerando-pdf-com-snappy/' target='_blank'>Continuar Lendo</a>",
                'source'      => "http://www.schoolofnet.com/2015/07/gerando-pdf-com-snappy/"
        );
        $arrayPosts[] = $post;
        $post = array(
                'id'          => 1,
                'title'       => "Instalando o Laravel 5 no Windows",
                'title-link'  => "instalando-o-laravel-5-no-windows",
                'date'        => "31 de Julho de 2015",
                'content'     => "Neste video demonstro como instalar o instalador do Laravel no Windows, adicionando-o às variáveis de ambiente, e também como
                                        criar e executar um novo projeto Laravel no PHPStorm.<br /><br />
                                        <iframe width='750' height='450' src='https://www.youtube.com/embed/KbT0weA5I2c' frameborder='0' allowfullscreen='allowfullscreen'></iframe>",
                'source'      => "http://www.schoolofnet.com/2015/07/laravel-no-windows/"
        );
        $arrayPosts[] = $post;
        $post = array(
                'id'          => 2,
                'title'       => "Como formatar datas com PHP",
                'title-link'  => "como-formatar-datas-com-php",
                'date'        => "30 de Julho de 2015",
                'content'     => "Uma questão que às vezes tira o sono de muitos desenvolvedores PHP, é a formatação de data e hora. Já vi muitos códigos por aí
                                        em pleno PHP 5.6 que convertem e formatam data usando códigos de string e outros códigos mirabolantes.<br />
                                        No PHP existem muitas funções nativas que fazem diversas operações com datas, mas a partir do PHP 5.2 foi criado a classe
                                        DateTime que faz o trabalho duro com as datas e horários. Infelizmente, muitos desenvolvedores não a conhecem, deixando de usar
                                        um código altamente estruturado. O profissional PHP hoje tem que pelo menos conhecer o DateTime, porque, existem métodos procedurais
                                        para trabalhar com data e o DateTime é orientado a objetos.<br />
                                        <a href='http://www.schoolofnet.com/2015/04/como-formatar-datas-com-php/' target='_blank'>Continuar Lendo</a>",
                'source'      => "http://www.schoolofnet.com/2015/04/como-formatar-datas-com-php/"
        );
        $arrayPosts[] = $post;

        return $arrayPosts;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $auxArrayPosts = $this->montaArray();

        $arrayPosts[] = $auxArrayPosts[$id];

//         return "<pre>".print_r(compact('arrayPost'), 1)."</pre>";
        return view("blog.posts", compact('arrayPosts'));
    }

    /**
     * Display all the resource
     *
     * @return \Illuminate\View\View
     */
    public function showAll()
    {
        $arrayPosts = $this->montaArray();

        return view("blog.posts", compact('arrayPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
