
            //---------------Sélectionnez toutes les colonnes
            $datas = $database->select("connexions", "*");
            var_dump($datas);

            // Sélectionnez une colonne
            $datas = $database->select("connexions", ["id", "nom", "e_mail"], ["nom" => "khouira"]);
            var_dump($datas);

            // ------------AFFICHER LE CONTENUE D'UNE COLONNE----------
            $data = $database->get('connexions', '*', ['nom' => "khouira"]);
            var_dump($data);
            echo "la liste des champs !";
           
            // --------------- suppression-----------
            $database->delete("connexions", ["id" => 36]);
            echo "le compte de fouzia est supprimé !";


            //--------------Renvoie l'ID de la dernière ligne insérée--- 
            $database->insert("connexions", [
                "nom" => "toto",
                "e_mail" => "foo@bar.com",
                'MOT_DE_PASS' => "25",

            ]);

            $account_id = $database->id();
            var_dump($account_id);
            
            //--------MODIFICATION----------  
            $data = $database->update("connexions", [
                "e_mail" => "kadsad@outlook.fr"
            ], [
                "nom" => "khouira"
            ]);
            //------------------- */