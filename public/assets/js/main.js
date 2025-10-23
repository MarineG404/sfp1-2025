// This file is intentionally left blank.
const profil = {
	nom: "Quang Hieu TRAN",
	poste: "Développeur FullStack Web ou Application",
	infos: {
		age: 25,
		mail: "tranquanghieustudent@gmail.com",
		telephone: "07 76 07 51 23"
	},
	competences_techniques: ["HTML", "CSS", "JavaScript", "PHP", "Java", "Dart", "Flutter", "Laravel", "React", "React-Native", "MySQL"],
	competences_generales: ["Prise d'initiative", "Travail equipe", "Capacite de travailler sous pression", "Adaptabilite"]
};



function afficherCV(profil) {
	const cv = document.createElement("div");
	cv.id = "cv";

	// Titre
	const title = document.createElement("h1");
	title.id = "title";
	title.textContent = profil.nom;

	// Sous-titre
	const subtitle = document.createElement("h2");
	subtitle.id = "subtitle";
	subtitle.textContent = profil.poste;

	// Infos
	const infos = document.createElement("div");
	infos.id = "infos";
	infos.innerHTML = `<script src="../assets/js/main.js"></script>

    <p><strong>Âge :</strong> ${profil.infos.age}</p>
    <p><strong>Email :</strong> ${profil.infos.mail}</p>
    <p><strong>Téléphone :</strong> ${profil.infos.telephone}</p>
  `;

	// Présentation
	const summary = document.createElement("div");
	summary.id = "summary";
	summary.textContent = profil.presentation;

	// Compétences techniques
	const skills = document.createElement("ul");
	skills.id = "hard_skills";
	profil.competences_techniques.forEach(skill => {
		const li = document.createElement("li");
		li.textContent = skill;
		skills.appendChild(li);
	});
	skills.id = "soft_skills";
	profil.competences_generales.forEach(skill => {
		const li = document.createElement("li");
		li.textContent = skill;
		skills.appendChild(li);
	});

	// Ajout des éléments au CV
	cv.append(title, subtitle, infos, summary, skills);
	document.body.appendChild(cv);
}

// Lancement au chargement
document.addEventListener("DOMContentLoaded", () => {
	afficherCV(profil);
});// This file is intentionally left blank.
