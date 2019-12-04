<?php namespace App\Controllers;

use App\Models\EntryModel;
use Config\Services;

class Entry extends BaseController
{
	public function entries()
	{
		$entryModel      = new EntryModel();
		$data['entries'] = $entryModel->findAll();

		return view('entries', $data);
	}

	public function entry($id)
	{
		$entryModel    = new EntryModel();
		$data['entry'] = $entryModel->find($id);

		return view('entry', $data);
	}

	public function save()
	{
		$request    = Services::request();
		$entryModel = new EntryModel();
		$primaryKey = 'id';
		$data       = [
	        'id'      => $request->getPost('id'),
	        'place'   => $request->getPost('place'),
	        'country' => $request->getPost('country'),
	        'review'  => $request->getPost('review')
		];

		$entryModel->save($data);

		return redirect()->to(site_url());
	}

	public function delete()
	{
		$request    = Services::request();
		$entryModel = new EntryModel();

		$entryModel->delete($request->getPost('id'));

		return redirect()->to(site_url());
	}
}
