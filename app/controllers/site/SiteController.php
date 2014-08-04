<?php 
namespace site;
use BaseController;
use DB;
use Illuminate\Support\Facades\Cache;
/**
*  Todo lo relacionado al manejo del sitio web
*/
class SiteController extends BaseController
{
	
	/**
	* The layout that should be used for responses.
	*/
	protected $layout = 'layouts.site';

	##---------------- index page --------------- ##
	public function index()
	{
		$Products = DB::table("Products")->get(array(
					'id',
					'name',
                    'value'));

		# Return response
		$this->layout->with('title', "Tetraigodetodo - Compras online en USA | Envios a Nicaragua | Carga Maritima");
		$this->layout->content = \View::make('site.index')
								->with('Products', $Products);
				                
	}

	public function test()
	{
		//$data = array();
		//$text = "Accesorios de Camara - (26.50%)Accesorios de Cultura Física - (50.30%)Accesorios de Impresoras - (15.00%)Accesorios de Vehículo - (26.50%)Accesorios Extrenos de Computadora - (15.00%)Accesorios Musicales - (20.75%)Accesorios para Fiesta - (49.84%)Accesorios Proyector - (15.00%)Adaptador - (15.00%)Adorno de Piedra - (32.25%)Adornos de ceramica, madera, metal, plastico, vidrio - (49.84%)Agenda de Papel - (32.25%)Agenda Electrónica - (15.00%)Alarma - (15.00%)Alfombra - (43.23%)Amortiguadores - (20.75%)Amplificador - (15.00%)Antena - (26.50%)Anteojos de Sol - (43.23%)Anzuelo - (15.00%)Aros de Bicicleta y Moto - (26.50%)Aros de Carro - (20.75%)Arrancador - (15.00%)Artículo Deportivo Balón Pelota - (26.50%)Aspiradora - (43.23%)Bateria Acústica - (26.50%)Baterias / Pilas - (15.00%)Batidora - (32.25%)Bicicleta - (32.25%)Billetera - Cartera de Hombre - (52.09%)Binoculares - (32.25%)Bocina - (43.23%)Bolillos para Tambor - (20.75%)Bolsa de Aire - (20.75%)Bolsa de Dormir - (49.84%)Bolso para Laptop - (52.09%)Bomba de Aceite / agua - (15.00%)Bombillos - (20.75%)Bujias - (15.00%)Cables - (15.00%)Cafetera - (49.84%)Calculadora - (15.00%)Calentador - (15.00%)Calentador de Agua - (32.25%)Camara de Video - (43.98%)Camara Fotográfica Digital - (43.98%)Camara Fotográfica Tradicional - (56.45%)Caña de pescar - (56.63%)Cargador - (15.00%)Carrete de Pesca - (15.00%)Carroceria - (43.98%)Carrocería de Moto - (26.50%)Cartera de Mujer - Bolso - (52.09%)Cartuchos de Tinta - (26.50%)Casa de campaña - (52.09%)Casco - (32.25%)Case para Cpu - (15.00%)Catálogos - (32.25%)Cd's - (32.25%)Champú - (32.25%)Chip - (15.00%)Cintas de medición de Glucosa - (0.00%)Cinturón - (32.25%)Clutch - (20.75%)Coche de Bebé - (32.25%)Colchón - (32.25%)Computadora - (15.00%)Consola de Video Juegos - (43.23%)Control remoto - (38.11%)Cortadora de Zacate - (15.00%)Cortinas - (32.25%)Creatina - (26.50%)Cubiertos para Comer - (37.65%)Disco de Acetato - (43.23%)Disco Duro Extreno - (15.00%)Disfraz - (45.47%)Diskman o Walkman - (49.84%)Dvd - (26.50%)Dvd Player - (56.45%)Dvd Recorder - (56.45%)Electrodomésticos - (26.50%)Estuche para Instrumento Musical - (49.84%)Estuche/Cover de Celular - (32.25%)Estuche/Cover de Celular de cuero - (52.09%)Faja de transmisión - (15.00%)Filtro de aceite / aire - (26.50%)Filtro de Agua - (15.00%)Fluorescente - (32.25%)Fotocopiadora - (15.00%)Freidora - (26.50%)Frenos y Partes - (15.00%)Fuente de Poder - (15.00%)Fusile - (15.00%)Gata Hidráulica - (15.00%)Generador de Señal - (20.75%)Glucómetro - (0.00%)GPS - (15.00%)Grifería - (32.25%)Guitarra Acústica - (32.25%)Herramientas - (15.00%)Herramientas de Jardín - (20.75%)Horno de Microondas - (20.75%)Impresora - (15.00%)Instrumento Viento Metal - (32.25%)Instrumentos musicales - (26.50%)iPod Reproductor de Sonido y Video - (58.70%)iPod Reproductor Musical - (52.09%)Joyería / Bisuterias - (69.68%)Juego de Mesa - (32.25%)Juegos de Videos de Lector Óptico - (26.50%)Juguetes - (32.25%)Karaoke - (49.84%)Keratina - (52.09%)Laca, Crema para el Cabello - (49.84%)Lampara - (49.84%)Lapicero/Pluma - (32.25%)Laptop - (15.00%)Lector CD / DVD Rom - (15.00%)Lector Electrónico Kindle - (15.00%)Lente de Contacto - (20.75%)Libros - (0.00%)Llantas - (38.11%)Llave Maya - (15.00%)Lociones / Crema - (49.84%)Luces de carro - (20.75%)Maletín - (49.84%)Manguera - (32.25%)Máquina de coser, Soldar Moler Café - (15.00%)Máscaras - (52.09%)Memoria Portátil - (15.00%)Memoria RAM - (15.00%)Microscopio - (15.00%)Mixer - (15.00%)Mochila Escolar - (0.00%)Mochila-Bolso - (32.25%)Monedas - (5.00%)Monitor lcd o tradicional - (49.84%)Monitor de Ritmo Cardiaco - (0.00%)Motor - (15.00%)Mouse - Ratón de Computadora - (15.00%)MP3 - Reproductor de Sonido - (52.09%)MP4 - Reproductor de Sonido y Video - (58.70%)Muebles - (32.25%)Mufle - (20.75%)Ollas y Sartenes - (32.25%)Palos de Golf - (62.95%)Paños - (26.50%)Pantalla de celular - (15.00%)Pantalla de Computadora - (15.00%)Pantalla de mp3 - (15.00%)Papel - (26.50%)Parabrisas - (20.75%)Parlantes - (15.00%)Parte de Bicicleta - (26.50%)Parte de Impresoa - (15.00%)Parte de Montacarga - (15.00%)Parte de Moto - (26.50%)Pastilla de Freno - (20.75%)Patines Ruedas / Hielo - (32.25%)Pedal de Guitarra - (20.75%)Pelotas de Golf - (62.95%)Peluca - (43.23%)Perfumes - (32.25%)Pieza de Metal - (15.00%)Pieza de Plástico - (32.25%)Pinturas - (26.50%)Plancha de Pelo - (32.25%)Plantilla Cocina - (26.50%)Platillo Musical - (26.50%)Platos de Cerámica - (49.84%)Posters - (32.25%)Procesador - (15.00%)Proteína - (15.00%)Proyector de Video Para Pc o Tv - (49.84%)Quemador - (15.00%)Rack para Carro - (32.25%)Radiador - (20.75%)Radio de Comunicación - (15.00%)Radio Normal y Carro - (49.84%)Raqueta - (43.98%)Refrigeradora - (56.45%)Reloj Muñeca o Pared - (49.84%)Repuestos de celular - (15.00%)Repuestos de Motor - (15.00%)Respuestos de Vehículo - (20.75%)Revista - (0.00%)Romana - (32.25%)Ropa - (45.48%)Ropa Intima - (49.84%)Router - (15.00%)Sabanas - (32.25%)Sandalias-Chinelas - (32.25%)Secadora de Pelo - (26.50%)Silla de bebé para carro - (26.50%)Silla de escritorio - (32.25%)Sofá - (32.25%)Software - (15.00%)Sombrilla - (32.25%)Suplementos Alimenticios Líquido - (26.50%)Suplementos Alimenticios Polvo - (26.50%)Suspención de Carro - (26.50%)Suspención de Moto - (20.75%)Tabla de Surf - (62.95%)Tableta Electrónica - (15.00%)Taco de Billar - (39.15%)Tacómetro - (15.00%)Tambor - (26.50%)Tarjeta de Memoria, Video, Madre - (15.00%)Tarjeta SIM - (15.00%)Teatro en Casa - (56.45%)Teclado de celular - (15.00%)Teclado de Computadora - (15.00%)Teclado Musical - (26.50%)Tela - Tejidos - (15.00%)Teléfono Celular y Fijo - (38.00%)Telescopio - (15.00%)Televisor - (49.84%)Tienda de Campaña - (26.50%)Tinta - (26.50%)Toner - (15.00%)Transformador - (15.00%)Transitores - (15.00%)Tripode Camara - (15.00%)Válvulas - (15.00%)Vaso de Vidrio - (32.25%)Volante de Carro - (26.50%)Zapatos - (32.25%)";
		//$text = "Parlantes - (15.00%)Parte de Bicicleta - (26.50%)Parte de Impresoa - (15.00%)Parte de Montacarga - (15.00%)Parte de Moto - (26.50%)Pastilla de Freno - (20.75%)Patines Ruedas / Hielo - (32.25%)Pedal de Guitarra - (20.75%)Pelotas de Golf - (62.95%)Peluca - (43.23%)Perfumes - (32.25%)Pieza de Metal - (15.00%)Pieza de Plástico - (32.25%)Pinturas - (26.50%)Plancha de Pelo - (32.25%)Plantilla Cocina - (26.50%)Platillo Musical - (26.50%)Platos de Cerámica - (49.84%)Posters - (32.25%)Procesador - (15.00%)Proteína - (15.00%)Proyector de Video Para Pc o Tv - (49.84%)Quemador - (15.00%)Rack para Carro - (32.25%)Radiador - (20.75%)Radio de Comunicación - (15.00%)Radio Normal y Carro - (49.84%)Raqueta - (43.98%)Refrigeradora - (56.45%)Reloj Muñeca o Pared - (49.84%)Repuestos de celular - (15.00%)Repuestos de Motor - (15.00%)Respuestos de Vehículo - (20.75%)Revista - (0.00%)Romana - (32.25%)Ropa - (45.48%)Ropa Intima - (49.84%)Router - (15.00%)Sabanas - (32.25%)Sandalias-Chinelas - (32.25%)Secadora de Pelo - (26.50%)Silla de bebé para carro - (26.50%)Silla de escritorio - (32.25%)Sofá - (32.25%)Software - (15.00%)Sombrilla - (32.25%)Suplementos Alimenticios Líquido - (26.50%)Suplementos Alimenticios Polvo - (26.50%)Suspención de Carro - (26.50%)Suspención de Moto - (20.75%)Tabla de Surf - (62.95%)Tableta Electrónica - (15.00%)Taco de Billar - (39.15%)Tacómetro - (15.00%)Tambor - (26.50%)Tarjeta de Memoria, Video, Madre - (15.00%)Tarjeta SIM - (15.00%)Teatro en Casa - (56.45%)Teclado de celular - (15.00%)Teclado de Computadora - (15.00%)Teclado Musical - (26.50%)Tela - Tejidos - (15.00%)Teléfono Celular y Fijo - (38.00%)Telescopio - (15.00%)Televisor - (49.84%)Tienda de Campaña - (26.50%)Tinta - (26.50%)Toner - (15.00%)Transformador - (15.00%)Transitores - (15.00%)Tripode Camara - (15.00%)Válvulas - (15.00%)Vaso de Vidrio - (32.25%)Volante de Carro - (26.50%)Zapatos - (32.25%)";
		//$text = str_replace(")", ")*", $text);
		//$text = explode("*", $text);
		// foreach ($text as $line) {
		// 	if (!empty($line)) {
		// 		echo "<br>";
		// 		$temp = array();
		// 		$arr = explode("- (", $line);
		// 		$temp['key'] = trim($arr[0]);
		// 		$temp['value'] = trim(str_replace(")", "", str_replace("(", "", $arr[1])));
		// 		//echo $temp['key']."--".$temp['value'] ; ;
		// 		$data[] = $temp;
		// 		$Id =DB::table('Products')->insertGetId(array(
  //               'name' => $temp['key'],
  //               'value' => $temp['value']));
		// 		echo $Id;
		// 	}
		// }
		$Products = DB::table("Products")->get(array(
					'id',
					'name',
                    'value'));

		$Products = json_encode($Products);

		//$data = utf8_decode($data);
		Return utf8_decode($Products);
	}

}