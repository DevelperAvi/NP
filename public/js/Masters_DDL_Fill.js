//------------------Fill DDO Dropdown Method-------------------------//
function DDO(DropdownObject, BlockID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BlockID == undefined) {
        BlockID = 0;
    }
    var HandlerUrl = "/Handlers/DDO.ashx?BlockID=" + BlockID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Month Dropdown Method-------------------------//
function Months(DropdownObject, YearID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (YearID == undefined) {
        YearID = 0;
    }
    var HandlerUrl = "/Handlers/Months.ashx?YearId=" + YearID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------SHG Block Wise-------------------------//
function SHG_Block_Wise(DropdownObject, BlockID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BlockID == undefined) {
        BlockID = 0;
    }
    var HandlerUrl = "/Handlers/SHG_Block_Wise.ashx?BlockID=" + BlockID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Uniq Agency Block Wise-------------------------//
function Uniq_Agency_Block_Wise(DropdownObject, BlockID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BlockID == undefined) {
        BlockID = 0;
    }
    var HandlerUrl = "/Handlers/Uniq_Agency_block_Wise.ashx?BlockID=" + BlockID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Uniq Agency Project Wise-------------------------//
function Uniq_Agency_project_Wise(DropdownObject, ProjectID, DistrictID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (ProjectID == undefined) {
        ProjectID = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    var HandlerUrl = "/Handlers/Uniq_Agency_project_Wise.ashx?ProjectID=" + ProjectID + "&DistrictID=" + DistrictID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Rejection Reasons Method-------------------------//
function RejectionReasons(DropdownObject, InstallmentId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (InstallmentId == undefined) {
        InstallmentId = 0;
    }
    var HandlerUrl = "/Handlers/RejectionReasons.ashx?InstId=" + InstallmentId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill branches By IFSC Code-------------------------//
function FillBranchesByIFSCCode(DropdownObject, IFSCCode, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (IFSCCode == undefined) {
        IFSCCode = 0;
    }
    var HandlerUrl = "/Handlers/BankBranchDetailsByIFSCCodeStrict.ashx?IFSCCode=" + IFSCCode;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Year Dropdown Method-------------------------//
function Years(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/Years.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Designations Dropdown Method-------------------------//
function Designations(DropdownObject, DepartmentID, OfficeTypeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DepartmentID == undefined) {
        DepartmentID = 0;
    }
    if (OfficeTypeID == undefined) {
        OfficeTypeID = 0;
    }
    var HandlerUrl = "/Handlers/Designations.ashx?DepartmentID=" + DepartmentID + "&OfficeTypeID=" + OfficeTypeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Designations Dropdown Method-------------------------//
function MarriageEvent(DropdownObject, EventLBID, MSchemeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (EventLBID == undefined) {
        EventLBID = 0;
    }
    if (MSchemeID == undefined) {
        MSchemeID = 0;
    }
    var HandlerUrl = "/Handlers/MarriageEvents.ashx?LbId=" + EventLBID + "&MSchemeID=" + MSchemeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Office Level Dropdown Method-------------------------//
function OfficeLevel(DropdownObject, valueToBeSelect, LoginOfficeLevelID) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/OfficeLevel.ashx?LoginOfficeLevelID=" + LoginOfficeLevelID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Office Type Dropdown Method-------------------------//
function OfficeType(DropdownObject, valueToBeSelect, OfficeLevelID, DepartmentID) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (OfficeLevelID == undefined) {
        OfficeLevelID = 0;
    }
    if (DepartmentID == undefined) {
        DepartmentID = 0;
    }
    var HandlerUrl = "/Handlers/OfficeTypes.ashx?OfficeLevelID=" + OfficeLevelID + "&DepartmentID=" + DepartmentID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill offices Method-------------------------//
function Offices(DropdownObject, HODID, OfficeLevelID, OfficeTypeID, DistrictID, LBID, GPZoneID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (HODID == undefined) {
        HODID = 0;
    }
    if (OfficeLevelID == undefined) {
        OfficeLevelID = 0;
    }
    if (OfficeTypeID == undefined) {
        OfficeTypeID = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LBID == undefined) {
        LBID = 0;
    }
    if (GPZoneID == undefined) {
        GPZoneID = 0;
    }
    var HandlerUrl = "/Handlers/Offices.ashx?HODID=" + HODID + "&OfficeLevelID=" + "&OfficeTypeID=" + OfficeTypeID + "&DistrictID=" + DistrictID + "&LBID=" + LBID + "&GPZoneID=" + GPZoneID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill hospital Type Dropdown Method-------------------------//
function HospitalType(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/HospitalTypes.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Infant Type Dropdown Method-------------------------//
function InfantType(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/InfantType.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Pension Type Dropdown Method-------------------------//
function PensionTypes(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/Pensiontype.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Maternity Place Type Dropdown Method-------------------------//
function MaternityPlace(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/MaternityPlace.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Bank Dropdown Method-------------------------//
function BankName(DropdownObject, DistrictID, LocalBodyID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LocalBodyID == undefined) {
        LocalBodyID = 0;
    }
    var HandlerUrl = "/Handlers/BanksNameByLocalBodyID.ashx?DistrictID=" + DistrictID + "&LocalBodyID=" + LocalBodyID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill School To MApped HSG-------------------------//
function FillSchoolToMapping(DropdownObject, VWID, TID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (VWID == undefined) {
        VWID = 0;
    }
    var HandlerUrl = "/Handlers/SchoolListToMapHSG.ashx?VWID=" + VWID + "&TID=" + TID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Bank Type Dropdown Method-------------------------//
function BankType(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/BankType.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill APMC Dropdown Method-------------------------//
function APMCs(DropdownObject, DistrictID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    var HandlerUrl = "/Handlers/APMC.ashx?DistrictID=" + DistrictID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Bank Dropdown Method-------------------------//
function Banks(DropdownObject, BankTypeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BankTypeID == undefined) {
        BankTypeID = 0;
    }
    var HandlerUrl = "/Handlers/Banks.ashx?BankTypeID=" + BankTypeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Block Dropdown Method-------------------------//
function Blocks(DropdownObject, DistrictID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    var HandlerUrl = "/Handlers/Blocks.ashx?DistrictID=" + DistrictID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Member LIst Dropdown Method-------------------------//
function MemberListDD(DropdownObject, FamilyId, MemberID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (FamilyId == undefined) {
        DistrictID = 0;
    }
    if (MemberID == undefined) {
        OilCompanyId = 0;
    }

    var HandlerUrl = "/Handlers/MemberListByFamilyID.ashx?MemberID=" + MemberID + "&FamilyId=" + FamilyId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Gas Agencies Dropdown Method-------------------------//
function GasAgencies(DropdownObject, DistrictID, OilCompanyId, SearchString, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (OilCompanyId == undefined) {
        OilCompanyId = 0;
    }
    if (SearchString == undefined) {
        SearchString = 0;
    }
    var HandlerUrl = "/Handlers/GasAgencies.ashx?DistrictID=" + DistrictID + "&OilCompanyID="; +OilCompanyId + "&SearchString=" + SearchString;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Gas Agencies Dropdown Method-------------------------//
function FPS(DropdownObject, DistrictID, VWID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (VWID == undefined) {
        VWID = 0;
    }
    var HandlerUrl = "/Handlers/FPS.ashx?DistrictID=" + DistrictID + "&VWID="; +VWID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Bank Branch Dropdown Method-------------------------//
function BankBranch(DropdownObject, BankID, DistrictID, valueToBeSelect, lable) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BankID == undefined) {
        BankID = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (lable == undefined) {
        lable = 0;
    }
    var HandlerUrl = "/Handlers/BankBranch.ashx?DistrictID=" + DistrictID + "&BankID=" + BankID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect, lable);
}
//------------------Fill Hospitals Dropdown Method-------------------------//
function Hospitals(DropdownObject, DistrictID, LBID, HType, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LBID == undefined) {
        LBID = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (HType == undefined) {
        HType = 0;
    }
    var HandlerUrl = "/Handlers/Hospitals.ashx?DistrictID=" + DistrictID + "&LBID=" + LBID + "&HType=" + HType;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Bank Dropdown Method-------------------------//
function FI(DropdownObject, FITypeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (FITypeID == undefined) {
        FITypeID = 0;
    }
    var HandlerUrl = "/Handlers/FI.ashx?FITypeID=" + FITypeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Relation Dropdown Method-------------------------//
function EducationalClasses(DropdownObject, EduTypeId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (EduTypeId == undefined) {
        EduTypeId = 0;
    }
    var HandlerUrl = "/Handlers/EducationalClasses.ashx?EduTypeId=" + EduTypeId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Discontinue Reason Dropdown Method-------------------------//
function DiscontinueReasons(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/PensionDiscontinueReason.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Work Type Dropdown Method-------------------------//
function WorkTypes(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/LabourWorkType.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Work Trade Dropdown Method-------------------------//
function WorkTypesTrade(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/LabourWorkTypeTrade.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Members List By Labour Scheme  Dropdown Method-------------------------//
function MemberListByScheme(DropdownObject, SchemeID, BMID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SchemeID == undefined) {
        SchemeID = 0;
    }
    if (BMID == undefined) {
        BMID = 0;
    }

    var HandlerUrl = "/Handlers/FillMemberListByLabourScheme.ashx?SchemeID=" + SchemeID + "&BMID=" + BMID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Categories for videos Dropdown Method-------------------------//
function VideoCategory(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/VideoCategory.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Videos sub categoris Dropdown Method-------------------------//
function VideoSubCategory(DropdownObject, CategoryID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (CategoryID == undefined) {
        CategoryID = 0;
    }
    var HandlerUrl = "/Handlers/VideosSubCategory.ashx?CategoryID=" + CategoryID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Division Dropdown Method-------------------------//
function Divisions(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/Division.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Disricts Dropdown Method-------------------------//
function Districts(DropdownObject, DivisionID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DivisionID == undefined) {
        DivisionID = 0;
    }
    var HandlerUrl = "/Handlers/Districts.ashx?DivisionID=" + DivisionID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function District(DropdownObject, DivisionID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DivisionID == undefined) {
        DivisionID = 0;
    }
    var HandlerUrl = "/Handlers/Districts.ashx?DivisionID=" + DivisionID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function JAPOffices(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/JAPOffices.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function Volunteers(DropdownObject, DistrictID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    var HandlerUrl = "/Handlers/Users.ashx?DistrictID=" + DistrictID;
    FillMultiDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Handloom Society Dropdown Method-------------------------//
function HanSociety(DropdownObject, DistrictID, VWID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (VWID == undefined) {
        VWID = 0;
    }
    var HandlerUrl = "/Handlers/HandloomSociety.ashx?DistrictID=" + DistrictID + "&VWID=" + VWID;;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Family Member List Dropdown Method-------------------------//
function FamilyMembers(DropdownObject, FID, DID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (FID == undefined) {
        FID = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    var HandlerUrl = "/Handlers/FamilyMemberList.ashx?FID=" + FID + "&DID=" + DID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Categories Dropdown Method-------------------------//
function Categories(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }

    var HandlerUrl = "/Handlers/Categories.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Caste Dropdown Method-------------------------//
function Caste(DropdownObject, CategoryID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (CategoryID == undefined) {
        CategoryID = 0;
    }
    var HandlerUrl = "/Handlers/Caste.ashx?CategoryID=" + CategoryID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Category Dropdown Method-------------------------//
function Category(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/Categories.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Project Dropdown Method-------------------------//
function Project(DropdownObject, DistrictId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictId == undefined) {
        DistrictId = 0;
    }
    var HandlerUrl = "/Handlers/Project.ashx?DistrictId=" + DistrictId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Sectors Dropdown Method-------------------------//
function Sectors(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }

    var HandlerUrl = "/Handlers/Sectors.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill GPSchemes Dropdown Method-------------------------//
function GPSchemes(DropdownObject, SectorID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SectorID == undefined) {
        SectorID = 0;
    }
    var HandlerUrl = "/Handlers/GPSchemes.ashx?SectorID=" + SectorID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Year by SchemeID Dropdown Method-------------------------//
function GPSchemeYears(DropdownObject, SchemeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SchemeID == undefined) {
        SchemeID = 0;
    }
    var HandlerUrl = "/Handlers/GPSchemeYear.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill GpDepartment Dropdown Method-------------------------//
function GPDepartment(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }

    var HandlerUrl = "/Handlers/GpDepartment.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Year by SchemeID Dropdown Method-------------------------//
function GPDepDesignation(DropdownObject, DepID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DepID == undefined) {
        DepID = 0;
    }
    var HandlerUrl = "/Handlers/GPDesignation.ashx?DepID=" + DepID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Schemes Dropdown Method-------------------------//
function Schemes(DropdownObject, SectorID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SectorID == undefined) {
        SectorID = 0;
    }
    var HandlerUrl = "/Handlers/Schemes.ashx?SectorID=" + SectorID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Tehsil Dropdown Method-------------------------//
function Tehsil(DropdownObject, DistrictID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    var HandlerUrl = "/Handlers/Tehsil.ashx?DistrictID=" + DistrictID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Local body Dropdown Method-------------------------//
function LocalBody(DropdownObject, OfcID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (OfcID == undefined) {
        OfcID = 0;
    }
    var HandlerUrl = "/Handlers/LocalBody_byOfc.ashx?ofcID=" + OfcID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Localbody Types Dropdown Method-------------------------//
function LocalbodyTypes(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/LocalbodyTypes.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Death Reason Dropdown Method-------------------------//

function DeathReason(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/DeathReson.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Gp Zone Dropdown Method-------------------------//
function GpZones(DropdownObject, LbId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LbId == undefined) {
        LbId = 0;
    }
    var HandlerUrl = "/Handlers/GpZones.ashx?LbId=" + LbId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function UnAssigned_GPs(DropdownObject, LbId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LbId == undefined) {
        LbId = 0;
    }
    var HandlerUrl = "/Handlers/UnAssigned_GPs.ashx?LbId=" + LbId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function GpZonesGOI(DropdownObject, LbId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LbId == undefined) {
        LbId = 0;
    }
    var HandlerUrl = "/Handlers/GOIGpZones.ashx?LbId=" + LbId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Marriage Society Dropdown Method-------------------------//
function MarriageSociety(DropdownObject, LbId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LbId == undefined) {
        LbId = 0;
    }
    var HandlerUrl = "/Handlers/MarriageSociety.ashx?LbId=" + LbId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Localbodies Dropdown Method-------------------------//
function MAndiLocalbodies(DropdownObject, MandiID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MAndiID == undefined) {
        MAndiID = 0;
    }
    var HandlerUrl = "/Handlers/MandiLocalbodies.ashx?MandiID=" + MandiID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function Localbodies(DropdownObject, DistrictID, LBTypeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LBTypeID == undefined) {
        LBTypeID = 0;
    }
    var HandlerUrl = "/Handlers/localbodies.ashx?DistrictID=" + DistrictID + "&LBTypeID=" + LBTypeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function LocalbodiesGOI(DropdownObject, DistrictID, LBTypeID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LBTypeID == undefined) {
        LBTypeID = 0;
    }
    var HandlerUrl = "/Handlers/GOILocalbodies.ashx?DistrictID=" + DistrictID + "&LBTypeID=" + LBTypeID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function Localbodies_RU(DropdownObject, DistrictID, Is_Rural, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (Is_Rural == undefined) {
        Is_Rural = 0;
    }
    var HandlerUrl = "/Handlers/localbodies.ashx?DistrictID=" + DistrictID + "&Is_Rural=" + Is_Rural;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Mill Dropdown Method-------------------------//
function Mills(DropdownObject, DistrictID, LBID, FamilyId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LBID == undefined) {
        LBID = 0;
    }
    if (FamilyId == undefined) {
        FamilyId = 0;
    }
    var HandlerUrl = "/Handlers/Mills.ashx?DistrictID=" + DistrictID + "&LBID=" + LBID + "&FamilyId=" + FamilyId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Village/Ward Dropdown Method-------------------------//
function VillageWards(DropdownObject, GZId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (GZId == undefined) {
        GZId = 0;
    }
    var HandlerUrl = "/Handlers/VillageWards.ashx?GpZoneId=" + GZId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function SmagraVillageWardsForGOI(DropdownObject, GZId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (GZId == undefined) {
        GZId = 0;
    }
    var HandlerUrl = "/Handlers/GOISamagraVillageWards.ashx?GpZoneId=" + GZId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function VillageWardsGOI(DropdownObject, GZId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (GZId == undefined) {
        GZId = 0;
    }
    var HandlerUrl = "/Handlers/GOIVillages.ashx?GpZoneId=" + GZId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Village/Ward Dropdown Method-------------------------//
function VillageWardsBySocietyId(DropdownObject, DID, SID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    if (SID == undefined) {
        SID = 0;
    }
    var HandlerUrl = "/Handlers/VillageWardsBySocietyId.ashx?DistrictID=" + DID + "&SocietyId=" + SID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill CardTypes Dropdown Method-------------------------//
function CardTypes(DropdownObject, IsFamily, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (IsFamily == undefined) {
        IsFamily = 0;
    }
    var HandlerUrl = "/Handlers/CardTypes.ashx?IsFamily=" + IsFamily;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Gadna Blocks Dropdown Method-------------------------//
function GadnaBlocks(DropdownObject, GZID, VWID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (GZID == undefined) {
        GZID = 0;
    }
    if (VWID == undefined) {
        VWID = 0;
    }
    var HandlerUrl = "/Handlers/GadnaBlocks.ashx?GpZoneId=" + GZID + "&VWID=" + VWID;;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function HouseNumber(DropdownObject, Gadna_BlcokID, VWID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (Gadna_BlcokID == undefined) {
        Gadna_BlcokID = 0;
    }
    if (VWID == undefined) {
        VWID = 0;
    }
    var HandlerUrl = "/Handlers/HouseNumber.ashx?Gadna_BlockID=" + Gadna_BlcokID + "&VWID=" + VWID;;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Relation Dropdown Method-------------------------//
function Relations(DropdownObject, IsMale, FID, MID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (IsMale == undefined) {
        IsMale = 0;
    }
    if (FID == undefined) {
        FID = 0;
    }
    if (MID == undefined) {
        MID = 0;
    }
    var HandlerUrl = "/Handlers/Relations.ashx?IsMale=" + IsMale + "&FID=" + FID + "&MID=" + MID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Relation By MemberID Dropdown Method-------------------------//
function RelationsByMID(DropdownObject, MID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MID == undefined) {
        MID = 0;
    }
    var HandlerUrl = "/Handlers/RelationByMID.ashx?MID=" + MID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
function Fieldofficer(DropdownObject, DistrictID, LBID, GPID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (LBID == undefined) {
        LBID = 0;
    }
    if (GPID == undefined) {
        GPID = 0;
    }
    var HandlerUrl = "/Handlers/FieldOfficerbyGP.ashx?DistrictID=" + DistrictID + "&LBID=" + LBID + "&GPID=" + GPID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------- Common Base Method For Fill Labour Type---------------------------------------------------//

function FillLabour_Type(DropdownObject, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/LabourType.ashx";
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------- Common Base Method For Fill Labours---------------------------------------------------//
function Labours(DropdownObject, DistrictID, GPID, LabourTypeId, valueToBeSelect) {
    if (DistrictID == undefined) {
        DistrictID = 0;
    }
    if (GPID == undefined) {
        GPID = 0;
    }
    if (LabourTypeId == undefined) {
        LabourTypeId = 0;
    }
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/Labours.ashx?DistrictID=" + DistrictID + "&GPID=" + GPID + "&LabourTypeId=" + LabourTypeId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------- Common Base Method For Fill Material Types---------------------------------------------------//
function MaterialTypes(DropdownObject, VendorID, valueToBeSelect) {
    if (VendorID == undefined) {
        VendorID = 0;
    }
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    var HandlerUrl = "/Handlers/MaterialTypes.ashx?VendorID=" + VendorID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Cook Schools-------------------------//
function CookSchools(DropdownObject, SchoolTypeId, DistrictId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SchoolTypeId == undefined) {
        SchoolTypeId = 0;
    }
    if (DistrictId == undefined) {
        DistrictId = 0;
    }
    var HandlerUrl = "/Handlers/CookSchools.ashx?SchoolTypeId=" + SchoolTypeId + "&DistrictId=" + DistrictId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Cooks-------------------------//
function Cooks(DropdownObject, MonthId, DistrictId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MonthId == undefined) {
        MonthId = 0;
        alert(MonthId);
    }
    if (DistrictId == undefined) {
        DistrictId = 0;
    }
    var HandlerUrl = "/Handlers/Cooks.ashx?MonthId=" + MonthId + "&DistrictId=" + DistrictId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Schools-------------------------//
function Schools(DropdownObject, MonthId, SchoolTypeId, DistrictId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MonthId == undefined) {
        MonthId = 0;
    }
    if (SchoolTypeId == undefined) {
        SchoolTypeId = 0;
    }
    if (DistrictId == undefined) {
        DistrictId = 0;
    }
    var HandlerUrl = "/Handlers/Schools.ashx?MonthId=" + MonthId + "&SchoolTypeId=" + SchoolTypeId + "&DistrictId=" + DistrictId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Uniq Agency-------------------------//
function Uniq_Agency(DropdownObject, DistrictId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DistrictId == undefined) {
        DistrictId = 0;
    }

    var HandlerUrl = "/Handlers/Agency.ashx?DistrictId=" + DistrictId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Employee Dropdown Method-------------------------//
function employee(DropdownObject, LBID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (LBID == undefined) {
        LBID = 0;
    }
    var HandlerUrl = "/Handlers/Employee.ashx?LBID=" + LBID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Sector Dropdown Method-------------------------//
function Sectors(DropdownObject, ProjectId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (ProjectId == undefined) {
        ProjectId = 0;
    }
    var HandlerUrl = "/Handlers/Sector.ashx?ProjectId=" + ProjectId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Anganwadi Dropdown Method-------------------------//
function Anganwadis(DropdownObject, SectorId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SectorId == undefined) {
        SectorId = 0;
    }
    var HandlerUrl = "/Handlers/Anganwadi.ashx?SectorId=" + SectorId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//-------------------Common Base Method For reusability---------------------------------------------------//

function Get_Traget_Audiance_By_Mobile_App(DropdownObject, APPID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (APPID == undefined) {
        APPID = 0;
    }
    var HandlerUrl = "/Handlers/Get_Traget_Audiance_By_Mobile_App.ashx?APPID=" + APPID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------LocalBody District Wise-------------------------//
function LocalBody_District_Wise(DropdownObject, DID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    var HandlerUrl = "/Handlers/DistrictWiseLocalBody.ashx?DID=" + DID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Month Dropdown Method-------------------------//
function FillProject(DropdownObject, DID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    var HandlerUrl = "/Handlers/Get_Project_By_DID.ashx?DID=" + DID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Month Dropdown Method-------------------------//
function FillSHGINMAPAnganwadi(DropdownObject, DID, PID, SID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    if (PID == undefined) {
        PID = 0;
    }
    if (SID == undefined) {
        SID = 0;
    }
    var HandlerUrl = "/Handlers/Get_SHGList.ashx?DID=" + DID + "&PID=" + PID + "&SID=" + SID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Month Dropdown Method-------------------------//
function FillCookINMAPAnganwadi(DropdownObject, DID, PID, SID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (DID == undefined) {
        DID = 0;
    }
    if (PID == undefined) {
        PID = 0;
    }
    if (SID == undefined) {
        SID = 0;
    }
    var HandlerUrl = "/Handlers/Get_Cook.ashx?DID=" + DID + "&PID=" + PID + "&SID=" + SID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Month Dropdown Method-------------------------//
function FillSectorByPRoID(DropdownObject, POID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (POID == undefined) {
        POID = 0;
    }
    var HandlerUrl = "/Handlers/Get_Sector_ByProjectId.ashx?PID=" + POID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Month Dropdown Method-------------------------//
function FillAnganWadiByScetorID(DropdownObject, SectorID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (SectorID == undefined) {
        SectorID = 0;
    }
    var HandlerUrl = "/Handlers/Get_Anganwadi_by_SectorWise.ashx?SID=" + SectorID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------SHG Block Wise-------------------------//
function SHG_Block_Wise(DropdownObject, BlockID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BlockID == undefined) {
        BlockID = 0;
    }
    var HandlerUrl = "/Handlers/SHG_Block_Wise.ashx?BlockID=" + BlockID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Uniq Agency Block Wise-------------------------//
function Uniq_Agency_Block_Wise(DropdownObject, BlockID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (BlockID == undefined) {
        BlockID = 0;
    }
    var HandlerUrl = "/Handlers/Uniq_Agency_block_Wise.ashx?BlockID=" + BlockID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Rejection Reasons Method-------------------------//
function RejectionReasons(DropdownObject, InstallmentId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (InstallmentId == undefined) {
        InstallmentId = 0;
    }
    var HandlerUrl = "/Handlers/RejectionReasons.ashx?InstId=" + InstallmentId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------Get Target AudianceBy AppID-------------------------------//
function FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect, IsAll) {
    if (HandlerUrl == undefined) {
        return;
    }
    $("#dvLoading").show();
    DropdownObject.empty();
    DropdownObject.append("<option value='0'>Loading...</option>");
    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        url: HandlerUrl,
        dataType: "json",
        async: false,
        error: function (data, textStatus) {
        },
        success: function (data) {
            var ins = data;
            DropdownObject.empty();
            if (IsAll == 1)
                DropdownObject.append("<option value='0'>- Select All -</option>");
            else
                DropdownObject.append("<option value='0'>- Select -</option>");
            $.each(ins.rows, function (i, item) {
                DropdownObject.append('<option  value="' + item[0] + '"> ' + item[1] + '</option>');
            });
        },
        complete: function () {
            $("#dvLoading").hide();
            DropdownObject.val(valueToBeSelect);
        }
    });
}

//------------------Fill Month Dropdown Method-------------------------//
function FillAnganWadiByOfficeID(DropdownObject, OfficeId, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (OfficeId == undefined) {
        OfficeId = 0;
    }
    var HandlerUrl = "/Handlers/GetAnganwadiByOffice.ashx?OID=" + OfficeId;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

function FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect, lable) {
    $("#dvLoading").show();
    DropdownObject.empty();
    DropdownObject.append("<option value='0'>Loading...</option>");
    $.ajax({
        type: "GET",
        contentType: "application/json; charset=utf-8",
        url: HandlerUrl,
        dataType: "json",
        error: function (data, textStatus) {
        },
        success: function (data) {
            var ins = data, Value2;
            DropdownObject.empty();
            DropdownObject.append("<option value='0'> - Select - </option>"); $.each(ins.rows, function (i, item) {
                if (item[2] == undefined) {
                    Value2 = "0";
                }
                else {
                    Value2 = item[2];
                }
                DropdownObject.append('<option  value="' + item[0] + '" value2="' + Value2 + '"> ' + item[1] + '</option>');
            });
        },
        complete: function () {
            $("#dvLoading").hide();
            if (!isNaN(valueToBeSelect) && valueToBeSelect != '') {
                DropdownObject.val(valueToBeSelect);
            }
            if (lable != undefined) {
                lable.text(DropdownObject.find('option:selected').text());
                if (DropdownObject.val() == 0) {
                    lable.text('NA');
                }
            }
        }
    });
}

//Inspections Month//
function InspectionMonths(DropdownObject, YearID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (YearID == undefined) {
        YearID = 0;
    }
    var HandlerUrl = "/Handlers/InspectionMonth.ashx?Y=" + YearID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//Inspections Question Category//
function InspectionCategory(DropdownObject, MonthID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MonthID == undefined) {
        MonthID = 0;
    }
    var HandlerUrl = "/Handlers/InspectionQuestionCategory.ashx?M=" + MonthID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//Inspections Questions//
function InspectionQuestions(DropdownObject, MonthID, Year, Category, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (MonthID == undefined) {
        MonthID = 0;
        Year = 0;
        Category = 0;
    }
    var HandlerUrl = "/Handlers/InspectionQuestion.ashx?M=" + MonthID + "&Y=" + Year + "&C=" + Category;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
// Inspection Observation //
function InspectionObservation(DropdownObject, QuestionID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (QuestionID == undefined) {
        QuestionID = 0;
    }
    var HandlerUrl = "/Handlers/InspectionObservation.ashx?Q=" + QuestionID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//Get SFTP Directory //

function ToGetSFTPDirectory(DropdownObject, ServerID, ProcessType, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (ServerID == undefined) {
        ServerID = 0;
    }
    if (ProcessType == undefined) {
        ProcessType = 0;
    }
    var HandlerUrl = "/Handlers/ToGetSFTPDirectory.ashx?S=" + ServerID + "&T=" + ProcessType;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}
//------------------Fill Assets category Dropdown Method-------------------------//
function AssetsCategory(DropdownObject, ClassID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (ClassID == undefined) {
        ClassID = 0;
    }
    var HandlerUrl = "/Handlers/GetAssetsClassCategory.ashx?Id=" + ClassID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}

//------------------Fill Assets Sub Category Dropdown Method-------------------------//
function AssetsSubCategory(DropdownObject, CategoryID, valueToBeSelect) {
    if (valueToBeSelect == undefined) {
        valueToBeSelect = 0;
    }
    if (CategoryID == undefined) {
        CategoryID = 0;
    }
    var HandlerUrl = "/Handlers/GetAssetsSubcategory.ashx?CatId=" + CategoryID;
    FillDropdown(HandlerUrl, DropdownObject, valueToBeSelect);
}