<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Household;
use App\HouseholdAsset;
use App\HouseholdConsumption;
use App\HouseholdExpenditure;
use App\HouseholdMember;
use App\HouseholdMemberCompetenceCertificate;
use App\HouseholdMemberEducationalBackground;
use App\HouseholdMemberEmployementStatus;
use App\HouseholdMemberHealthStatuses;

class HouseholdController extends Controller {

    public function postNewUpload(Request $request) {
//         $households = $request->get('households');
        $data = $request->get('data');

        $decode = json_decode($data, true);
        $households = json_decode($decode["households"], true);
        $households_array = [];
        $household_assets = json_decode($decode["household_assets"], true);
        $household_assets_array = [];
        $household_consumptions = json_decode($decode["household_consumptions"], true);
        $household_consumptions_array = [];
        $household_expenditures = json_decode($decode["household_expenditures"], true);
        $household_expenditures_array = [];
        $household_members = json_decode($decode["household_members"], true);
        $household_members_array = [];
        $household_member_competence_certificates = json_decode($decode["household_member_competence_certificates"], true);
        $household_member_competence_certificates_array = [];
        $household_member_educational_backgrounds = json_decode($decode["household_member_educational_backgrounds"], true);
        $household_member_educational_backgrounds_array = [];
        $household_member_employment_status = json_decode($decode["household_member_employment_status"], true);
        $household_member_employment_status_array = [];
        $household_member_health_statuses = json_decode($decode["household_member_health_statuses"], true);
        $household_member_health_statuses_array = [];

        foreach ($households as $household) {
            array_push($households_array, $household['id']);
            $new_household = new Household();
            $new_household->created_at = $household['created_at'];
            $new_household->updated_at = $household['updated_at'];
            $new_household->created_by = $household['created_by'];
            $new_household->updated_by = $household['updated_by'];
            $new_household->region = $household['region'];
            $new_household->region_id = $household['region_id'];
            $new_household->province = $household['province'];
            $new_household->province_id = $household['province_id'];
            $new_household->city = $household['city'];
            $new_household->city_id = $household['city_id'];
            $new_household->barangay = $household['barangay'];
            $new_household->barangay_id = $household['barangay_id'];
            $new_household->purok = $household['purok'];
            $new_household->purok_id = $household['purok_id'];
            $new_household->status = 2;
            $new_household->house_no = $household['house_no'];
            $new_household->household_no = $household['household_no'];
            $new_household->occupancy_types = $household['occupancy_types'];
            $new_household->tenure = $household['tenure'];
            $new_household->is_occupant_owns_the_land = $household['is_occupant_owns_the_land'];
            $new_household->is_occupant_owns_the_bldg = $household['is_occupant_owns_the_bldg'];
            $new_household->monthly_rental = $household['monthly_rental'];
            $new_household->drainage_system_concern = $household['drainage_system_concern'];
            $new_household->street_maintenance_concern = $household['street_maintenance_concern'];
            $new_household->garbage_collection_concern = $household['garbage_collection_concern'];
            $new_household->fire_protection_concern = $household['fire_protection_concern'];
            $new_household->police_protection_concern = $household['police_protection_concern'];
            $new_household->ambulance_service_concern = $household['ambulance_service_concern'];
            $new_household->livelihood_programs_concern = $household['livelihood_programs_concern'];
            $new_household->adolescent_pregnancy_rate = $household['adolescent_pregnancy_rate'];
            $new_household->child_abuse_rating = $household['child_abuse_rating'];
            $new_household->crime_rating = $household['crime_rating'];
            $new_household->domestic_violence_rating = $household['domestic_violence_rating'];
            $new_household->drug_abuse_rating = $household['drug_abuse_rating'];
            $new_household->hunger_rating = $household['hunger_rating'];
            $new_household->environmental_contamination_rating = $household['environmental_contamination_rating'];
            $new_household->health_disparities_rating = $household['health_disparities_rating'];
            $new_household->no_of_household_members = $household['no_of_household_members'];
//            $new_household->save();
        }
        foreach ($household_assets as $household_asset) {
            array_push($household_assets_array, $household_asset['id']);
            $new_household_asset = new HouseholdAsset();
            $new_household_asset->created_at = $household_asset['created_at'];
            $new_household_asset->updated_at = $household_asset['updated_at'];
            $new_household_asset->created_by = $household_asset['created_by'];
            $new_household_asset->updated_by = $household_asset['updated_by'];
            $new_household_asset->region = $household_asset['region'];
            $new_household_asset->region_id = $household_asset['region_id'];
            $new_household_asset->province = $household_asset['province'];
            $new_household_asset->province_id = $household_asset['province_id'];
            $new_household_asset->city = $household_asset['city'];
            $new_household_asset->city_id = $household_asset['city_id'];
            $new_household_asset->barangay = $household_asset['barangay'];
            $new_household_asset->barangay_id = $household_asset['barangay_id'];
            $new_household_asset->purok = $household_asset['purok'];
            $new_household_asset->purok_id = $household_asset['purok_id'];
            $new_household_asset->status = 2;
            $new_household_asset->house_no = $household_asset['house_no'];
            $new_household_asset->household_no = $household_asset['household_no'];
            $new_household_asset->qty = $household_asset['qty'];
            $new_household_asset->assets = $household_asset['assets'];
//            $new_household_asset->save();
        }
        foreach ($household_consumptions as $household_consumption) {
            array_push($household_consumptions_array, $household_consumption['id']);
            $new_HouseholdConsumption = new HouseholdConsumption();
            $new_HouseholdConsumption->created_at = $household_consumption['created_at'];
            $new_HouseholdConsumption->updated_at = $household_consumption['updated_at'];
            $new_HouseholdConsumption->created_by = $household_consumption['created_by'];
            $new_HouseholdConsumption->updated_by = $household_consumption['updated_by'];
            $new_HouseholdConsumption->region = $household_consumption['region'];
            $new_HouseholdConsumption->region_id = $household_consumption['region_id'];
            $new_HouseholdConsumption->province = $household_consumption['province'];
            $new_HouseholdConsumption->province_id = $household_consumption['province_id'];
            $new_HouseholdConsumption->city = $household_consumption['city'];
            $new_HouseholdConsumption->city_id = $household_consumption['city_id'];
            $new_HouseholdConsumption->barangay = $household_consumption['barangay'];
            $new_HouseholdConsumption->barangay_id = $household_consumption['barangay_id'];
            $new_HouseholdConsumption->purok = $household_consumption['purok'];
            $new_HouseholdConsumption->purok_id = $household_consumption['purok_id'];
            $new_HouseholdConsumption->status = 2;
            $new_HouseholdConsumption->house_no = $household_consumption['house_no'];
            $new_HouseholdConsumption->household_no = $household_consumption['household_no'];
            $new_HouseholdConsumption->consumption_date = $household_consumption['consumption_date'];
            $new_HouseholdConsumption->items = $household_consumption['items'];
            $new_HouseholdConsumption->amount = $household_consumption['amount'];
//            $new_HouseholdConsumption->save();
        }
        foreach ($household_expenditures as $household_expenditure) {
            array_push($household_expenditures_array, $household_expenditure['id']);
            $new_household_expenditures = new HouseholdExpenditure();
            $new_household_expenditures->created_at = $household_expenditure['created_at'];
            $new_household_expenditures->updated_at = $household_expenditure['updated_at'];
            $new_household_expenditures->created_by = $household_expenditure['created_by'];
            $new_household_expenditures->updated_by = $household_expenditure['updated_by'];
            $new_household_expenditures->region = $household_expenditure['region'];
            $new_household_expenditures->region_id = $household_expenditure['region_id'];
            $new_household_expenditures->province = $household_expenditure['province'];
            $new_household_expenditures->province_id = $household_expenditure['province_id'];
            $new_household_expenditures->city = $household_expenditure['city'];
            $new_household_expenditures->city_id = $household_expenditure['city_id'];
            $new_household_expenditures->barangay = $household_expenditure['barangay'];
            $new_household_expenditures->barangay_id = $household_expenditure['barangay_id'];
            $new_household_expenditures->purok = $household_expenditure['purok'];
            $new_household_expenditures->purok_id = $household_expenditure['purok_id'];
            $new_household_expenditures->status = 2;
            $new_household_expenditures->house_no = $household_expenditure['house_no'];
            $new_household_expenditures->household_no = $household_expenditure['household_no'];
            $new_household_expenditures->expenditure_date = $household_expenditure['expenditure_date'];
            $new_household_expenditures->internet_services = $household_expenditure['internet_services'];
            $new_household_expenditures->medical_expenses = $household_expenditure['medical_expenses'];
            $new_household_expenditures->cigarretes = $household_expenditure['cigarretes'];
            $new_household_expenditures->hobbies_clubs = $household_expenditure['hobbies_clubs'];
            $new_household_expenditures->load_expenses = $household_expenditure['load_expenses'];
            $new_household_expenditures->electric_gas_expenses = $household_expenditure['electric_gas_expenses'];
            $new_household_expenditures->books_newspapers_expenses = $household_expenditure['books_newspapers_expenses'];
            $new_household_expenditures->gambling = $household_expenditure['gambling'];
            $new_household_expenditures->personal_care = $household_expenditure['personal_care'];
            $new_household_expenditures->misc = $household_expenditure['misc'];
            $new_household_expenditures->alcohol = $household_expenditure['alcohol'];
            $new_household_expenditures->vacation = $household_expenditure['vacation'];
            $new_household_expenditures->water_bill = $household_expenditure['water_bill'];
            $new_household_expenditures->cable_services = $household_expenditure['cable_services'];
            $new_household_expenditures->social_obligations = $household_expenditure['social_obligations'];
//            $new_household_expenditures->save();
        }
        foreach ($household_members as $household_member) {
            array_push($household_members_array, $household_member['id']);
            $new_household_members = new HouseholdMember();
            $new_household_members->created_at = $household_member['created_at'];
            $new_household_members->updated_at = $household_member['updated_at'];
            $new_household_members->created_by = $household_member['created_by'];
            $new_household_members->updated_by = $household_member['updated_by'];
            $new_household_members->region = $household_member['region'];
            $new_household_members->region_id = $household_member['region_id'];
            $new_household_members->province = $household_member['province'];
            $new_household_members->province_id = $household_member['province_id'];
            $new_household_members->city = $household_member['city'];
            $new_household_members->city_id = $household_member['city_id'];
            $new_household_members->barangay = $household_member['barangay'];
            $new_household_members->barangay_id = $household_member['barangay_id'];
            $new_household_members->purok = $household_member['purok'];
            $new_household_members->purok_id = $household_member['purok_id'];
            $new_household_members->status = 2;
            $new_household_members->house_no = $household_member['house_no'];
            $new_household_members->household_no = $household_member['household_no'];
            $new_household_members->household_member_no = $household_member['household_member_no'];
            $new_household_members->fname = $household_member['fname'];
            $new_household_members->mname = $household_member['mname'];
            $new_household_members->lname = $household_member['lname'];
            $new_household_members->sname = $household_member['sname'];
            $new_household_members->gender = $household_member['gender'];
            $new_household_members->marital_status = $household_member['marital_status'];
            $new_household_members->bday = $household_member['bday'];
            $new_household_members->occupancy_years = $household_member['occupancy_years'];
            $new_household_members->height = $household_member['height'];
            $new_household_members->weight = $household_member['weight'];
            $new_household_members->birth_place = $household_member['birth_place'];
            $new_household_members->present_address = $household_member['present_address'];
            $new_household_members->relation_to_household = $household_member['relation_to_household'];
            $new_household_members->religion = $household_member['religion'];
            $new_household_members->citizenship = $household_member['citizenship'];
            $new_household_members->email_address = $household_member['email_address'];
            $new_household_members->blood_type = $household_member['blood_type'];
            $new_household_members->languages_spoken = $household_member['languages_spoken'];
            $new_household_members->is_registered_voter = $household_member['is_registered_voter'];
            $new_household_members->voters_id_no = $household_member['voters_id_no'];
            $new_household_members->image = $household_member['image'];
            $new_household_members->transient_no = $household_member['transient_no'];
            $new_household_members->contact_no = $household_member['contact_no'];
//            $new_household_members->save();
        }
        foreach ($household_member_competence_certificates as $household_member_competence_certificate) {
            array_push($household_member_competence_certificates_array, $household_member_competence_certificate['id']);
            $new_household_member_competence_certificate = new HouseholdMemberCompetenceCertificate();
            $new_household_member_competence_certificate->created_at = $household_member_competence_certificate['created_at'];
            $new_household_member_competence_certificate->updated_at = $household_member_competence_certificate['updated_at'];
            $new_household_member_competence_certificate->created_by = $household_member_competence_certificate['created_by'];
            $new_household_member_competence_certificate->updated_by = $household_member_competence_certificate['updated_by'];
            $new_household_member_competence_certificate->region = $household_member_competence_certificate['region'];
            $new_household_member_competence_certificate->region_id = $household_member_competence_certificate['region_id'];
            $new_household_member_competence_certificate->province = $household_member_competence_certificate['province'];
            $new_household_member_competence_certificate->province_id = $household_member_competence_certificate['province_id'];
            $new_household_member_competence_certificate->city = $household_member_competence_certificate['city'];
            $new_household_member_competence_certificate->city_id = $household_member_competence_certificate['city_id'];
            $new_household_member_competence_certificate->barangay = $household_member_competence_certificate['barangay'];
            $new_household_member_competence_certificate->barangay_id = $household_member_competence_certificate['barangay_id'];
            $new_household_member_competence_certificate->purok = $household_member_competence_certificate['purok'];
            $new_household_member_competence_certificate->purok_id = $household_member_competence_certificate['purok_id'];
            $new_household_member_competence_certificate->status = 2;
            $new_household_member_competence_certificate->house_no = $household_member_competence_certificate['house_no'];
            $new_household_member_competence_certificate->household_no = $household_member_competence_certificate['household_no'];
            $new_household_member_competence_certificate->household_member_no = $household_member_competence_certificate['household_member_no'];
            $new_household_member_competence_certificate->fname = $household_member_competence_certificate['fname'];
            $new_household_member_competence_certificate->mname = $household_member_competence_certificate['mname'];
            $new_household_member_competence_certificate->lname = $household_member_competence_certificate['lname'];
            $new_household_member_competence_certificate->sname = $household_member_competence_certificate['sname'];
            $new_household_member_competence_certificate->certificate = $household_member_competence_certificate['certificate'];
            $new_household_member_competence_certificate->rating = $household_member_competence_certificate['rating'];
            $new_household_member_competence_certificate->issued_by = $household_member_competence_certificate['issued_by'];
            $new_household_member_competence_certificate->date_issued = $household_member_competence_certificate['date_issued'];
            $new_household_member_competence_certificate->transient_no = $household_member_competence_certificate['transient_no'];
//            $new_household_member_competence_certificate->save();
        }
        foreach ($household_member_educational_backgrounds as $household_member_educational_background) {
            array_push($household_member_educational_backgrounds_array, $household_member_educational_background['id']);
            $new_household_member_educational_background = new HouseholdMemberEducationalBackground();
            $new_household_member_educational_background->created_at = $household_member_educational_background['created_at'];
            $new_household_member_educational_background->updated_at = $household_member_educational_background['updated_at'];
            $new_household_member_educational_background->created_by = $household_member_educational_background['created_by'];
            $new_household_member_educational_background->updated_by = $household_member_educational_background['updated_by'];
            $new_household_member_educational_background->region = $household_member_educational_background['region'];
            $new_household_member_educational_background->region_id = $household_member_educational_background['region_id'];
            $new_household_member_educational_background->province = $household_member_educational_background['province'];
            $new_household_member_educational_background->province_id = $household_member_educational_background['province_id'];
            $new_household_member_educational_background->city = $household_member_educational_background['city'];
            $new_household_member_educational_background->city_id = $household_member_educational_background['city_id'];
            $new_household_member_educational_background->barangay = $household_member_educational_background['barangay'];
            $new_household_member_educational_background->barangay_id = $household_member_educational_background['barangay_id'];
            $new_household_member_educational_background->purok = $household_member_educational_background['purok'];
            $new_household_member_educational_background->purok_id = $household_member_educational_background['purok_id'];
            $new_household_member_educational_background->status = 2;
            $new_household_member_educational_background->house_no = $household_member_educational_background['house_no'];
            $new_household_member_educational_background->household_no = $household_member_educational_background['household_no'];
            $new_household_member_educational_background->household_member_no = $household_member_educational_background['household_member_no'];
            $new_household_member_educational_background->fname = $household_member_educational_background['fname'];
            $new_household_member_educational_background->mname = $household_member_educational_background['mname'];
            $new_household_member_educational_background->lname = $household_member_educational_background['lname'];
            $new_household_member_educational_background->sname = $household_member_educational_background['sname'];
            $new_household_member_educational_background->educational_status = $household_member_educational_background['educational_status'];
            $new_household_member_educational_background->name_of_school = $household_member_educational_background['name_of_school'];
            $new_household_member_educational_background->achievements = $household_member_educational_background['achievements'];
            $new_household_member_educational_background->highest_grade = $household_member_educational_background['highest_grade'];
            $new_household_member_educational_background->year_graduated = $household_member_educational_background['year_graduated'];
            $new_household_member_educational_background->transient_no = $household_member_educational_background['transient_no'];
//            $new_household_member_educational_background->save();
        }
        foreach ($household_member_employment_status as $household_member_employment_statu) {
            array_push($household_member_employment_status_array, $household_member_employment_statu['id']);
            $new_household_member_employment_status = new HouseholdMemberEmployementStatus();
            $new_household_member_employment_status->created_at = $household_member_employment_statu['created_at'];
            $new_household_member_employment_status->updated_at = $household_member_employment_statu['updated_at'];
            $new_household_member_employment_status->created_by = $household_member_employment_statu['created_by'];
            $new_household_member_employment_status->updated_by = $household_member_employment_statu['updated_by'];
            $new_household_member_employment_status->region = $household_member_employment_statu['region'];
            $new_household_member_employment_status->region_id = $household_member_employment_statu['region_id'];
            $new_household_member_employment_status->province = $household_member_employment_statu['province'];
            $new_household_member_employment_status->province_id = $household_member_employment_statu['province_id'];
            $new_household_member_employment_status->city = $household_member_employment_statu['city'];
            $new_household_member_employment_status->city_id = $household_member_employment_statu['city_id'];
            $new_household_member_employment_status->barangay = $household_member_employment_statu['barangay'];
            $new_household_member_employment_status->barangay_id = $household_member_employment_statu['barangay_id'];
            $new_household_member_employment_status->purok = $household_member_employment_statu['purok'];
            $new_household_member_employment_status->purok_id = $household_member_employment_statu['purok_id'];
            $new_household_member_employment_status->status = 2;
            $new_household_member_employment_status->house_no = $household_member_employment_statu['house_no'];
            $new_household_member_employment_status->household_no = $household_member_employment_statu['household_no'];
            $new_household_member_employment_status->household_member_no = $household_member_employment_statu['household_member_no'];
            $new_household_member_employment_status->fname = $household_member_employment_statu['fname'];
            $new_household_member_employment_status->mname = $household_member_employment_statu['mname'];
            $new_household_member_employment_status->lname = $household_member_employment_statu['lname'];
            $new_household_member_employment_status->sname = $household_member_employment_statu['sname'];
            $new_household_member_employment_status->employment_status = $household_member_employment_statu['employment_status'];
            $new_household_member_employment_status->employment_type = $household_member_employment_statu['employment_type'];
            $new_household_member_employment_status->unemployment_type = $household_member_employment_statu['unemployment_type'];
            $new_household_member_employment_status->company = $household_member_employment_statu['company'];
            $new_household_member_employment_status->work_position = $household_member_employment_statu['work_position'];
            $new_household_member_employment_status->work_description = $household_member_employment_statu['work_description'];
            $new_household_member_employment_status->is_looking_for_work = $household_member_employment_statu['is_looking_for_work'];
            $new_household_member_employment_status->ofw_business_name = $household_member_employment_statu['ofw_business_name'];
            $new_household_member_employment_status->ofw_business_address = $household_member_employment_statu['ofw_business_address'];
            $new_household_member_employment_status->ofw_mailing_address = $household_member_employment_statu['ofw_mailing_address'];
            $new_household_member_employment_status->ofw_type_of_business = $household_member_employment_statu['ofw_type_of_business'];
            $new_household_member_employment_status->ofw_financial_assistance_amount = $household_member_employment_statu['ofw_financial_assistance_amount'];
            $new_household_member_employment_status->ofw_country = $household_member_employment_statu['ofw_country'];
            $new_household_member_employment_status->ofw_job = $household_member_employment_statu['ofw_job'];
            $new_household_member_employment_status->ofw_reason_for_migration = $household_member_employment_statu['ofw_reason_for_migration'];
            $new_household_member_employment_status->transient_no = $household_member_employment_statu['transient_no'];
//            $new_household_member_employment_status->save();
        }
        foreach ($household_member_health_statuses as $household_member_health_statuse) {
            array_push($household_member_health_statuses_array, $household_member_health_statuse['id']);
//            $new_household_member_health_statuses = new HouseholdMemberHealthStatuses();
//            $new_household_member_health_statuses->created_at = $household_member_health_statuse['created_at'];
//
//            $new_household_member_health_statuses->updated_at = $household_member_health_statuse['updated_at'];
//            $new_household_member_health_statuses->created_by = $household_member_health_statuse['created_by'];
//            $new_household_member_health_statuses->updated_by = $household_member_health_statuse['updated_by'];
//            $new_household_member_health_statuses->region = $household_member_health_statuse['region'];
//            $new_household_member_health_statuses->region_id = $household_member_health_statuse['region_id'];
//
//            $new_household_member_health_statuses->province = $household_member_health_statuse['province'];
//            $new_household_member_health_statuses->province_id = $household_member_health_statuse['province_id'];
//            $new_household_member_health_statuses->city = $household_member_health_statuse['city'];
//            $new_household_member_health_statuses->city_id = $household_member_health_statuse['city_id'];
//            $new_household_member_health_statuses->barangay = $household_member_health_statuse['barangay'];
//
//            $new_household_member_health_statuses->barangay_id = $household_member_health_statuse['barangay_id'];
//            $new_household_member_health_statuses->purok = $household_member_health_statuse['purok'];
//            $new_household_member_health_statuses->purok_id = $household_member_health_statuse['purok_id'];
//            $new_household_member_health_statuses->status = 2;
//            $new_household_member_health_statuses->house_no = $household_member_health_statuse['house_no'];
//
//            $new_household_member_health_statuses->household_no = $household_member_health_statuse['household_no'];
//            $new_household_member_health_statuses->household_member_no = $household_member_health_statuse['household_member_no'];
//            $new_household_member_health_statuses->fname = $household_member_health_statuse['fname'];
//            $new_household_member_health_statuses->mname = $household_member_health_statuse['mname'];
//            $new_household_member_health_statuses->lname = $household_member_health_statuse['lname'];
//
//            $new_household_member_health_statuses->sname = $household_member_health_statuse['sname'];
//            $new_household_member_health_statuses->is_seing_a_doctor = $household_member_health_statuse['is_seing_a_doctor'];
//            $new_household_member_health_statuses->health_status = $household_member_health_statuse['health_status'];
//            $new_household_member_health_statuses->name_of_doctor = $household_member_health_statuse['name_of_doctor'];
//            $new_household_member_health_statuses->disabilities = $household_member_health_statuse['disabilities'];
//
//            $new_household_member_health_statuses->level_of_disability = $household_member_health_statuse['level_of_disability'];
//            $new_household_member_health_statuses->cause_of_disability = $household_member_health_statuse['cause_of_disability'];
//            $new_household_member_health_statuses->transient_no = $household_member_health_statuse['transient_no'];
//            $new_household_member_health_statuses->save();
        }

        return response()->json(['households' => $households_array
                    , 'household_assets' => $household_assets_array
                    , 'household_consumptions_array' => $household_consumptions_array
                    , 'household_expenditures_array' => $household_expenditures_array
                    , 'household_members' => $household_members_array
                    , 'household_member_competence_certificates' => $household_member_competence_certificates_array
                    , 'household_member_educational_backgrounds' => $household_member_educational_backgrounds_array
                    , 'household_member_employment_status' => $household_member_employment_status_array
                    , 'household_member_health_statuses' => $household_member_health_statuses_array
                        ], 200);
    }

}
