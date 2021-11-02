<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

function getFileJson($file, $ext = 'json')
{
	$path = config('set.files').'/'.$file.'.'.$ext;
	if (Storage::disk('local')->exists($path))
	{
		return json_decode(Storage::disk('local')->get($path), true);
	}
	return false;
}

function getDirectional($directional, $file = 'directionals.json')
{
	$directional = Str::of($directional)->replaceMatches('/[^A-Za-z0-9]++/', '');
	$directional = Str::limit($directional, 2, '');
	$path = config('set.files').'/'.$file;
	if (Storage::disk('local')->exists($path)) {
		$json = Storage::disk('local')->get($path);
		$json = json_decode($json, true);
		if(Arr::exists($json, (string) $directional))
		{
			return Arr::get($json, (string) $directional);
		}	
	}
	else
		return false;
}
function getVoivodeship($number, $file = 'voivodeship.json')
{
	$path = config('set.files').'/'.$file;
	if (Storage::disk('local')->exists($path)) {
		$json = Storage::disk('local')->get($path);
		$json = json_decode($json, true);
		if(Arr::exists($json, (string) $number))
		{
			return Arr::get($json, (string) $number);
		}	
	}
	else
		return false;
}

function changeDateFormate($date, $date_format = 'd.m.Y\r.')
{
	return $date->format($date_format);    
}


function displayAlert()
{
	// dump(session()->all());
	if(Session::has('message'))
	{
		list($type, $message) = explode('|', Session::get('message'));

		switch ($type) {
			case 'error':
			$type = 'text-gray-50 bg-red-500';
			break;
			case 'message':
			$type = 'text-gray-50 bg-primary';
			break;
			case 'success':
			$type = 'text-gray-50 bg-green-600';
			break;
			case 'warning':
			$type = 'text-gray-50 bg-yellow-600';
			break;	
			default:
			$type = 'text-gray-50 bg-primary-light';
			break;
		}
		return sprintf('

		<div class="mt-10 px-6 py-4 border-0 rounded relative mb-4 %s" role="alert" x-data="{displayAlert: true}" x-show="displayAlert" 
		x-transition:enter="transition ease-out duration-300"
		x-transition:enter-start="opacity-0 transform scale-90"
		x-transition:enter-end="opacity-100 transform scale-100"
		x-transition:leave="transition ease-in duration-300"
		x-transition:leave-start="opacity-100 transform scale-100"
		x-transition:leave-end="opacity-0 transform scale-90">
		<span class="text-2xl inline-block mr-2 align-middle w-6 h-6">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path strokeLinecap="round" strokeLinejoin="round" strokeWidth="{2}" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
			</svg>
		</span>			
		<span class="inline-block align-middle mr-8">%s</span>
		<span class="absolute inset-y-0 right-0 flex items-center mr-4" @click="displayAlert = false">
		  <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20"><path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
		</span>
			</div>
			'
		, $type, $message);
	}

	return '';
}

function getContractStatuses()
{
	return getFileJson('contract-status');
}
function getNameContractStatus($var){
	return getContractStatuses()[$var];
}
function getNameContractStudium($var){
	if(!$var)
		$var = 0;
	return getFileJson('contract-studium')[$var];
}
function getFileJsonPull($file, $pull){
	$data = getFileJson($file);
	$data = Arr::pull($data, (string) $pull);
	return $data;
}

function getCarbonDate($date, $format="d/m/Y")
{
	if($date)
		return \Carbon\Carbon::parse($date)->locale('pl')->format($format);
}

function getParseCarbonDate($date, $format="d/m/Y")
{
	if($date)
		return \Carbon\Carbon::parse($date);
}

function getDifferentDateInDays($start, $stop){
	$start = getParseCarbonDate($start);
	$stop = getParseCarbonDate($stop);
	return $stop->diffInDays($start);
}

function getAdvancementTemp($start, $stop){
	$stop = getParseCarbonDate($stop);
	$diff = getDifferentDateInDays($start, $stop);
	$diff1 = getDifferentDateInDays($stop, now());
	if($stop < now())
		return round(100+($diff1/$diff)*100, 2);
	else
		return round(100-($diff1/$diff)*100, 2);
}

function getUserContract()
{
	return \Auth::user()->currentContract;
}