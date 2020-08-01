<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

#     Traduction fr par Olivier SEREE (contrib[at]seree.fr) http://*.solu.fr
#     	ajouts pour la 1.7 par Pierre-Yves Aillet (pierreyves.aillet@free.fr)

	return array(
		'a_commented_body' => "Votre réponse sur ^site_title a un nouveau commentaire par ^c_handle:\n\n^open^c_content^close\n\nVotre réponse était:\n\n^open^c_context^close\n\nVous pouvez répondre en ajoutant votre propre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'a_commented_subject' => 'Votre réponse sur ^site_title a un nouveau commentaire',

		'a_followed_body' => "Votre réponse sur ^site_title a une nouvelle question liée par ^q_handle:\n\n^open^q_title^close\n\nVotre réponse était:\n\n^open^a_content^close\n\nCliquer ci-dessous pour répondre à la nouvelle question:\n\n^url\n\nMerci,\n\n^site_title",
		'a_followed_subject' => 'Votre réponse sur ^site_title a une nouvelle question liée',

		'a_selected_body' => "Félicitations! Votre réponse sur ^site_title a été sélectionnée comme la meilleure par ^s_handle:\n\n^open^a_content^close\n\nLa question était:\n\n^open^q_title^close\n\nCliquez ci-dessous pour voir votre réponse:\n\n^url\n\nMerci,\n\n^site_title",
		'a_selected_subject' => 'Votre réponse sur ^site_title a été sélectionné!',

		'c_commented_body' => "Un nouveau commentaire par ^c_handle a été ajouté après votre commentaire sur ^site_title:\n\n^open^c_content^close\n\nLa discussion est la suivante:\n\n^open^c_context^close\n\nVous pouvez réagir en ajoutant un autre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'c_commented_subject' => 'Un nouveau commentaire sur ^site_title a été ajouté après votre commentaire',

		'confirm_body' => "Merci de cliquer ci-dessous pour valider votre adresse e-mail pour ^site_title.\n\n^url\n\nMerci,\n^site_title",
		'confirm_subject' => '^site_title - Confirmation de l\'adresse email',

		'feedback_body' => "Commentaires:\n^message\n\nNom:\n^name\n\nEmail:\n^email\n\nPage précédente:\n^previous\n\nUtilisateur:\n^url\n\nAdresse IP:\n^ip\n\nNavigateur:\n^browser",
		'feedback_subject' => 'Retour d\'information ^ ',

		'flagged_body' => "Un message par ^p_handle a été ^flags:\n\n^open^p_context^close\n\nCliquez ci-dessous pour voir le message:\n\n^url\n\n\nCliquez ci-dessous pour revoir tous les messages signalés:\n\n^a_url\n\n\nMerci,\n\n^site_title",
		'flagged_subject' => '^site_title a un message signalé',

		'moderate_body' => "Un message par ^p_handle nécessite votre approbation:\n\n^open^p_context^close\n\nCliquez ci-dessous pour approuver ou rejeter le message:\n\n^url\n\n\nCliquez ci-dessous passer en revue tous les messages en file d'attente:\n\n^a_url\n\n\nMerci,\n\n^site_title",
		'moderate_subject' => '^site_title modération',

		'new_password_body' => "Votre nouveau mot de passe pour ^site_title est ci-dessous.\n\nMot de passe: ^password\n\nIl est recommandé de changer ce mot de passe immédiatement après s'être connecté.\n\nMerci,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Votre nouveau mot de passe',

		'private_message_body' => "Vous avez recu un message privé de ^f_handle sur ^site_title:\n\n^open^message^close\n\n^moreMerci,\n\n^site_title\n\n\nPour bloquer les messages privés, visitez la page de votre compte:\n^a_url",
		'private_message_info' => "Plus d'informations sur ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Cliquez ci-dessous pour répondre à ^f_handle par message privé:\n\n^url\n\n",
		'private_message_subject' => 'Message de ^f_handle sur ^site_title',

		'q_answered_body' => "Votre question sur ^site_title a eu une réponse par ^a_handle:\n\n^open^a_content^close\n\nVotre question était:\n\n^open^q_title^close\n\nSi cette réponse vous convient, vous pouvez la choisir comme la meilleure:\n\n^url\n\nMerci,\n\n^site_title",
		'q_answered_subject' => 'Votre question sur ^site_title a une réponse',

		'q_commented_body' => "Votre question sur ^site_title a un nouveau commentaire par ^c_handle:\n\n^open^c_content^close\n\nVotre question était:\n\n^open^c_context^close\n\nVous pouvez répondre en ajoutant votre propre commentaire:\n\n^url\n\nMerci,\n\n^site_title",
		'q_commented_subject' => 'Votre question sur ^site_title a un nouveau commentaire',

		'q_posted_body' => "Une nouvelle question a été posée par ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nCliquez ci-dessous pour voir la question:\n\n^url\n\nMerci,\n\n^site_title",
		'q_posted_subject' => '^site_title a une nouvelle question',
		
		'remoderate_body' => "Un message édité par ^p_handle nécessite votre réapprobation:\n\n^open^p_context^close\n\nCliquez ci-dessous pour approuver ou masquer le message édité:\n\n^url\n\n\nCliquer ci-dessous pour examiner tous les messages en file d'attente:\n\n^a_url\n\n\nMerci,\n\n^site_title",
		'remoderate_subject' => '^site_title modération',

		'reset_body' => "Merci de cliquez ci-dessous pour réinitialiser votre mot de passe pour ^site_title.\n\n^url\n\nOu, entrez le code ci-dessous dans le champ prévu à cet effet.\n\nCode: ^code\n\nSi vous n'avez pas demandé de réinitialiser votre mot de passe, merci d'ignorer ce message.\n\nMerci,\n^site_title",
		'reset_subject' => '^site_title - Reset mot de passe oublié',

		'to_handle_prefix' => "^,\n\n",
		
		'u_registered_body' => "Un nouvel utilisateur s'est enregistré comme ^u_handle.\n\nCliquez ci-dessous pour voir le profil de l'utilisateur:\n\n^url\n\nMerci,\n\n^site_title",
		'u_to_approve_body' => "Un nouvel utilisateur s'est enregistré comme ^u_handle.\n\nCliquez ci-dessous pour approuver l'utilisateur:\n\n^url\n\nCliquez ci-dessous pour examiner tous les utilisateurs en attente d'approbation:\n\n^a_url\n\nMerci,\n\n^site_title",
		'u_registered_subject' => '^site_title a un nouvel utilisateur enregistré',
		
		'u_approved_body' => "Vous pouvez voir votre nouveau profil d'utilisateur ici:\n\n^url\n\nMerci,\n\n^site_title",
		'u_approved_subject' => 'Utilisateur approuvé sur ^site_title',
		
		'wall_post_subject' => ' Publier sur votre mur ^site_title',
		'wall_post_body' => "^f_handle a posté sur votre mur utilisateur sur ^site_title:\n\n^open^post^close\n\nVous pouvez répondre au message ici:\n\n^url\n\nMerci,\n\n^site_title",

		'welcome_body' => "Merci de votre inscription sur ^site_title.\n\n^custom^confirmVos informations de connexion sont les suivants:\n\nEmail: ^email\nMot de passe: ^password\n\nVeuillez garder cette information.\n\nMerci,\n\n^site_title\n^url",
		'welcome_confirm' => "Merci de cliquer ci-dessous pour valider votre adresse e-mail.\n\n^url\n\n",
		'welcome_subject' => 'Bienvenue à ^site_title!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
