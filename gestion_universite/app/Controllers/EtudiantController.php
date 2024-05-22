<?php

namespace App\Controllers;

use App\Models\EtudiantModel;
use App\Models\PromotionModel;
use App\Models\UtilisateurModel;
use CodeIgniter\Database\MySQLi\Result;
use PDO;

class EtudiantController extends BaseController
{
	public function index()
	{
		return view("accueil");
	}

	public function accueil()
	{
			$model_promotion = new PromotionModel();
		$donnees['total_promotions'] = count($model_promotion->findAll());

		$model_etudiant = new EtudiantModel();
		$donnees['total_etudiant'] = count($model_etudiant->findAll());

		return view("accueil", $donnees);
		
	}

	public function etudiant()
	{
		$model_etudiant = new EtudiantModel();
		$donnees['etudiants'] = $model_etudiant->findAll();

		return view("etudiant", $donnees);
		
	}
	
	public function ajout_etudiant()
	{
		
		$nom = $this->request->getVar('nom');
		$postnom = $this->request->getVar('postnom');
		$prenom = $this->request->getVar('prenom');
		$genre = $this->request->getVar('genre');
		$date_naissance = $this->request->getVar('date_naissance');
		$lieu_naissance = $this->request->getVar('lieu_naissance');
 
		$session = session();

		$model_etudiant = new EtudiantModel();
		$ajout = ['nom' => $nom, 'postnom' => $postnom, 'prenom' => $prenom, 'genre' => $genre, 'date_naissance' => $date_naissance, 'lieu_naissance' => $lieu_naissance];
		if ($id = $model_etudiant->insert($ajout)) {

			$session->setFlashdata('success', 'Ok');
			return redirect()->to(site_url('Home/etudiant'));
		} else {
			$session->setFlashdata('error', 'No');
			return redirect()->to(site_url('Home/etudiant'));
		}
	}

	public function modifier_etudiant($id = null)
	{

		$model_etudiant = new EtudiantModel();
		if ($id != null) {
			$donnees['l_etudiant'] =  $model_etudiant->where(['id' => $id])->first();
			$donnees['etudiants'] = $model_etudiant->findAll();
			return view("etudiant", $donnees);
		}
	}

	public function enregistrer_modification_etudiant($id = null)
	{
		if ($id != null) {

			$postnom = $this->request->getVar('postnom');
			$prenom = $this->request->getVar('prenom');
			$genre = $this->request->getVar('genre');
			$date_naissance = $this->request->getVar('date_naissance');
			$lieu_naissance = $this->request->getVar('lieu_naissance');
			$nom = $this->request->getVar('nom');
 
			$session = session();

			$model_etudiant = new EtudiantModel();
			$donnees = ['nom' => $nom, 'postnom' => $postnom, 'prenom' => $prenom, 'genre' => $genre, 'date_naissance' => $date_naissance, 'lieu_naissance' => $lieu_naissance];
			if ($model_etudiant->update($id, $donnees)) {
				$session->setFlashdata('success_update', 'Ok');
				return redirect()->to(site_url('Home/etudiant'));
			} else {
				$session->setFlashdata('error_update', 'No');
				return redirect()->to(site_url('Home/etudiant'));
			}
		}
	}
	public function supprimer_etudiant($id = null)
	{
		$session = session();

		if ($id) {
			$model_etudiant = new EtudiantModel();
			if($model_etudiant->delete($id)){
				$session->setFlashdata('success_delete','Ok');
				return redirect()->to(site_url('Home/etudiant'));
			}
			else{
				$session->setFlashdata('error_delete','No');
				return redirect()->to(site_url(('Home/etudiant')));
			}
		}
		
	}
}
