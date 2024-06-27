@extends('layout')
@section('title')
@endsection
@section('content')
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div
                        class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                        i</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Add Vaccine Date</h2>
                    </div>
                </div>

                <form action="{{ route('vaccinerecordUpdateData', $dataVaccineRecordId->id) }}" method="POST" class="divide-y divide-gray-200">
                    @csrf
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">Date vaccine</label>
                            <input type="date" name="vaccined_date" 
                            value="{{isset($dataVaccineRecordId) ? $dataVaccineRecordId->vaccined_date : ''}}"
                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                placeholder="">
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">STD_ID</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <select name="std_id" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        {{-- @foreach ($dataVaccineRecordId as $item) --}}
                                        <option value="{{isset($dataVaccineRecordId) ? $dataVaccineRecordId->vaccined_date : ''}}">{{isset($dataVaccineRecordId) ? $dataVaccineRecordId->vaccined_date : ''}}</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">VAC_ID</label>
                                <div class="relative focus-within:text-gray-600 text-gray-400">
                                    <select name="vac_id" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        {{-- @foreach ($dataVaccineRecordId as $item) --}}
                                        <option value="{{isset($dataVaccineRecordId) ? $dataVaccineRecordId->vaccined_date : ''}}">{{isset($dataVaccineRecordId) ? $dataVaccineRecordId->vaccined_date : ''}}</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="/vaccinerecord"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg> Cancel
                            </a>
                            <button type="submit"
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
