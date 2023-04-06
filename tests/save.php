$inputData = $request->request->all();
// exit(var_dump($inputData));
        $data['nickname'] = $request->request->get('nickname');
        $inputData['creation'] = strtotime($inputData['creation']);
        $inputData['logo'] = $_FILES['logo']['name'];

        if (!isset($inputData['particularity'])){
        $inputData['particularity'] = array();
    }
        if (!isset($inputData['anecdote'])){
        $inputData['anecdote'] = array();
    }
        if (!isset($inputData['document'])){
        $inputData['document'] = array();
    }else{
        foreach ($inputData['document'] as &$document) {
            $document["'year'"] = strtotime($document["'year'"]);
        }
    }
    if (!isset($inputData['decorum'])){
        $inputData['decorum'] = array();
    }else{
        foreach ($inputData['decorum'] as &$decorum) {
            $decorum["'year'"] = strtotime($decorum["'year'"]);
        }
    }
    if (!isset($inputData['goodies'])){
        $inputData['goodies'] = array();
    }else{
        foreach ($inputData['goodies'] as &$goodies) {
            $goodies["'year'"] = strtotime($goodies["'year'"]);
        }
    }
    if (!isset($inputData['sing'])){
        $inputData['sing'] = array();
    }else{
        $inputData['sing']['year'] = strtotime($inputData['sing']['year']);
    }

    if (!isset($inputData['committee'])){
        $inputData['committee'] = array();
    }else{
        $bddcommittee = array();
        foreach ($inputData['committee'] as &$committee) {
            $year = $committee["year"];
            $type = $committee["type"];
            $name = $committee["name"];
            $firstname = $committee["firstname"];
            $nickname = $committee["nickname"];
        
            // Vérifier si l'année existe déjà dans $bddcommittee
            if (isset($bddcommittee[$year])) {
                // Vérifier si le type de comité existe déjà pour cette année
                if (isset($bddcommittee[$year][$type])) {
                    // Si oui, générer un identifiant unique à partir du compteur et ajouter une nouvelle entrée
                    $id = count($bddcommittee[$year][$type]);
                    $bddcommittee[$year][$type][$id] = array(
                        "name" => $name,
                        "firstname" => $firstname,
                        "nickname" => $nickname
                    );
                } else {
                    // Sinon, créer une nouvelle entrée pour le type de comité correspondant
                    $bddcommittee[$year][$type] = array(
                        "0" => array(
                            "name" => $name,
                            "firstname" => $firstname,
                            "nickname" => $nickname
                        )
                    );
                }
            } else {
                // Sinon, créer une nouvelle entrée pour l'année et le type de comité correspondant
                $bddcommittee[$year] = array(
                    $type => array(
                        "0" => array(
                            "name" => $name,
                            "firstname" => $firstname,
                            "nickname" => $nickname
                        )
                    )
                );
            }
        }
        $inputData['committee'] = $bddcommittee;

    }
        // exit(var_dump($bddcommittee));
        $data = $inputData;

        // exit(var_dump($inputData));
        // exit(var_dump(json_encode($data)));

        // $data['name'] = $request->request->get('name');
        // $data['region'] = $request->request->get('region');
        // $data['country'] = $request->request->get('country');
        // $blason = $request->files->get('blason');

        // $filenameext = $_FILES['blason']['name'];
        // $filenameonly = pathinfo($_FILES['blason']['name'], PATHINFO_FILENAME);
        // $filesrcsave = 'towns/' . $filenameonly;

        // $save = 'towns/' . $filenameonly .'/'. $filenameext; 
        // $data['blason'] = $save;
        // $save = $this->saveFile($blason, $filesrcsave, $filenameonly);



        $createtown = $this->findApi->createAssociation(json_encode($data));
        
        return $this->redirectToRoute('association_list');