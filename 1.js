function biodata(name, age) {
    let profil = {
        "name"    : name,
        "age"     : age,
        "address" : "JL PALEM 4 NO117-08 HELVETIA, 20124, Medan, Sumatera Utara, Indonesia",
        "hobbies" : ["Teaching", "Reading news"],
        "is_married"  : false,
        "list_school" : [
            {
                "name" : "TK Pembina",
                "year_in" : "2001",
                "year_out" : "2002",
                "major"    : null
            },
            {
                "name" : "SD Harapan Mulia",
                "year_in" : "2002",
                "year_out" : "2008",
                "major"    : null
            },
            {
                "name" : "SMP Harapan Mekar",
                "year_in" : "2008",
                "year_out" : "2011",
                "major"    : null
            },
            {
                "name" : "SMK Amir Hamzah Medan",
                "year_in" : "2011",
                "year_out" : "2014",
                "major"    : "Teknik Komputer & Jaringan"
            },
            {
                "name" : "STMIK IBBI",
                "year_in" : "2015",
                "year_out" : "2019",
                "major"    : "Teknik Infotmatika"
            }
        ],
        "skills" : [
            {
                "skill_name" : "HTML",
                "level" : "expert"
            },
            {
                "skill_name" : "CSS",
                "level" : "advance"
            },
            {
                "skill_name" : "JavaScript",
                "level" : "advance"
            },
            {
                "skill_name" : "PHP",
                "level" : "advance"
            },
            {
                "skill_name" : "Visual Basic",
                "level" : "advance"
            },
            {
                "skill_name" : "C",
                "level" : "beginner"
            },
            {
                "skill_name" : "jQuery",
                "level" : "advanced"
            },
            {
                "skill_name" : "Bootstrap",
                "level" : "expert"
            },
            {
                "skill_name" : "Codeigniter",
                "level" : "advanced"
            },
            {
                "skill_name" : "Adobe illustrator",
                "level" : "beginner"
            },
            {
                "skill_name" : "3dsMax",
                "level" : "beginner"
            }
        ],
        "interesting_in_coding" : true     
    }
    return JSON.stringify(profil);
};

console.log(biodata("Al azmi",23));