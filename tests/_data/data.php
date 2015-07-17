<?php
/**
 * Generate all the possible combinations among a set of nested arrays.
 *
 * @param array $data  The entrypoint array container.
 * @param array $all   The final container (used internally).
 * @param array $group The sub container (used internally).
 * @param mixed $val   The value to append (used internally).
 * @param int   $i     The key index (used internally).
 */
function generate_combinations(array $data, array &$all = array(), array $group = array(), $value = null, $i = 0) {
	$keys = array_keys ( $data );
	if (isset ( $value ) === true) {
		array_push ( $group, $value );
	}

	if ($i >= count ( $data )) {
		array_push ( $all, $group );
	} else {
		$currentKey = $keys [$i];
		$currentElement = $data [$currentKey];
		foreach ( $currentElement as $val ) {
			generate_combinations ( $data, $all, $group, $val, $i + 1 );
		}
	}

	return $all;
}

// General

$marking_type = array (
		'Normal'
)
// 'Entrenamiento correctores',
// 'Entrenamiento estudiantes'
;

// Marking
$total_pages = array ();
for($pages = 0; $pages <= 100; $pages ++) {
	$total_pages [$pages] = $pages;
}

$anonymous = array (
		'Student anonymous / Marker visible',
		'Student anonymous / Marker anonymous',
		'Student visible / Marker visible',
		'Student visible / Marker anónimo'
);

$custom_marks = array (
		'empty',
		'Sp#Spelling error'
);

// Dates & Regrade
$enable_due_date = array (
		'Yes',
		'No'
);

$restrict_regrading_date = array(
		'Yes',
		'No'
);

$students_can_view_peers_exams = array(
		'Yes',
		'No'
);

// Grade 
$grading_method = array(
		'Rubric'
);

$info = array (
		$marking_type,
		$total_pages,
		$anonymous,
		$custom_marks,
		$enable_due_date,
		$restrict_regrading_date,
		$students_can_view_peers_exams,
		$grading_method
);

$combos = generate_combinations ( $info );
?>