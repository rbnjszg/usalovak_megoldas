<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorseController extends Controller
{
    public function index()
    {
        return view("horse.index");
    }

    public function list()
    {
        $horses = $this->getHorses();
        return view("horse.list", ["horses" => $horses]);
    }

    public function table()
    {
        $horses = $this->getHorses();
        return view("horse.table", ["horses" => $horses]);
    }

    public function grid()
    {
        $horses = $this->getHorses();
        return view("horse.grid", ["horses" => $horses]);
    }

    private function getHorses()
    {
        return collect([
            ["id" => "1", "allam" => "Alabama", "fajta" => "Racking Horse", "leiras" => "The Racking Horse is a breed of horse known for its ambling gait. The breed association is headquartered in Decatur, Alabama.", "kep" => "1024px-Horseicon.svg.png", "ev" => "1975"],
            ["id" => "2", "allam" => "Florida", "fajta" => "Florida Cracker Horse", "leiras" => "The Florida Cracker Horse was first brought to what is now Florida in the 1500s by Spanish explorers, and it played a large part in the development of the state's cattle and general agriculture industries.", "kep" => "Remington_A_cracker_cowboy.jpg", "ev" => "2008"],
            ["id" => "3", "allam" => "Idaho", "fajta" => "Appaloosa", "leiras" => "The Appaloosa has made a substantial contribution to Idaho history, mainly through its association with the Nez Perce Indian tribe.", "kep" => "THIEL_619.jpg", "ev" => "1975"],
            ["id" => "4", "allam" => "Kentucky", "fajta" => "Thoroughbred", "leiras" => "The Thoroughbred is the center of a multi-billion dollar breeding and racing industry in Kentucky.", "kep" => "Horseracing_Churchill_Downs.jpg", "ev" => "1996"],
            ["id" => "5", "allam" => "Maryland", "fajta" => "Thoroughbred", "leiras" => "Maryland has a long history of breeding and racing Thoroughbreds, and today maintains an extensive network of breeding farms, training centers and racecourses.", "kep" => "Horse-racing-4.jpg", "ev" => "2003"],
            ["id" => "6", "allam" => "Massachusetts", "fajta" => "Morgan", "leiras" => "The foundation sire of the Morgan breed, named Figure, was born in West Springfield, Massachusetts in 1789.", "kep" => "American_Morgan_Horse_cropped.jpg", "ev" => "1970"],
            ["id" => "7", "allam" => "Missouri", "fajta" => "Missouri Fox Trotter", "leiras" => "The Fox Trotter is a gaited breed developed in the Missouri Ozarks.", "kep" => "Quick_Trigger_Missouri_Fox_Trotter.jpg", "ev" => "2002"],
            ["id" => "8", "allam" => "New Jersey", "fajta" => "Horse (state animal)", "leiras" => "As of the designation of the horse as the state animal, New Jersey contained over 4,500 horse farms housing almost 40,000 horses and played host to a horse industry that extensively contributed to the preservation of natural lands in the state.", "kep" => "Mangalarga_Marchador.jpg", "ev" => "1977"],
            ["id" => "9", "allam" => "North Carolina", "fajta" => "Colonial Spanish Mustang", "leiras" => "This state breed references the Banker horse of the Outer Banks, descended from Spanish stock.", "kep" => "SpanishMustangsOfCorolla.jpg", "ev" => "2010"],
            ["id" => "10", "allam" => "North Dakota", "fajta" => "Nokota (honorary equine)", "leiras" => "The Nokota developed in the badlands of southwestern North Dakota, and are named after the Nakota Indian tribe that inhabited the area.", "kep" => "Nokota_Horses.jpg", "ev" => "1993"],
            ["id" => "11", "allam" => "South Carolina", "fajta" => "Carolina Marsh Tacky", "leiras" => "The Marsh Tacky was developed in the swampy Low Country region of South Carolina, and has played an integral part in the state's history.", "kep" => "Carolina_Marsh_Tacky.jpg", "ev" => "2010"],
            ["id" => "12", "allam" => "Tennessee", "fajta" => "Tennessee Walking Horse", "leiras" => "The Tennessee Walker is a gaited breed initially developed in middle Tennessee.", "kep" => "MiltonHorseShow.jpg", "ev" => "2000"],
            ["id" => "13", "allam" => "Texas", "fajta" => "American Quarter Horse", "leiras" => "The history of the Quarter Horse is closely intertwined with that of Texas, where the breed was used for ranching and racing. The American Quarter Horse Association is headquartered in Amarillo, Texas.", "kep" => "Buckskin_mare_left_flank.jpg", "ev" => "2009"],
            ["id" => "14", "allam" => "Vermont", "fajta" => "Morgan (state animal)", "leiras" => "The Morgan breed was developed mainly in Vermont, where the founding stallion, Figure, lived most of his life and died in 1821.", "kep" => "American_Morgan_Horse_cropped.jpg", "ev" => "1961"]
        ]);
    }
}
