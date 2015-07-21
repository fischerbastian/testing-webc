
<?php
ini_set ( 'memory_limit', '512M' );

/**
 * Generate all the possible combinations among a set of nested arrays.
 *
 * @param array $data
 *        	The entrypoint array container.
 * @param array $all
 *        	The final container (used internally).
 * @param array $group
 *        	The sub container (used internally).
 * @param mixed $val
 *        	The value to append (used internally).
 * @param int $i
 *        	The key index (used internally).
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
for($pages = 1; $pages <= 60; $pages ++) {
	$total_pages [$pages] = $pages;
}

$anonymous = array (
		'Student anonymous / Marker visible',
		'Student anonymous / Marker anonymous',
		'Student visible / Marker visible',
		'Student visible / Marker anónimo' 
);

$custom_marks = array (
		'empty' 
)
// 'Sp#Spelling error'
;

// Dates & Regrade
$enable_due_date = array (
		true,
		false 
);

$restrict_regrading_date = array (
		true,
		false 
);

$students_can_view_peers_exams = array (
		true,
		false 
);

// Grade
$grading_method = array (
		'Rubric' 
);

$grade_category = array (
		'Uncategorised' 
);

$minimum_grade = array ();
$maximum_grade = array ();

for($grade = 0; $grade <= 10; $grade ++) {
	$minimum_grade [$grade] = $grade;
	$maximum_grade [$grade] = $grade;
}

$adjust_grade_slope = array (
		true,
		false 
);

$header = array (
		'#',
		'Activity name',
		'Marking type',
		'Total pages',
		'Marker type',
		'Custom marks',
		'Enable due date',
		'Restrict regrading date',
		'Students can view peers exams',
		'Grading method',
		'Grade category',
		'Minimum grade',
		'Maximum grade',
		'Adjust grade slope' 
);

$info = array (
		$marking_type,
		$total_pages,
		$anonymous,
		$custom_marks,
		$enable_due_date,
		$restrict_regrading_date,
		$students_can_view_peers_exams,
		$grading_method,
		$grade_category,
		$minimum_grade,
		$maximum_grade,
		$adjust_grade_slope 
);

$combos = generate_combinations ( $info );

$new_combos = array ();
for($i = 0; $i < count ( $combos ); $i ++) {
	for($j = 0; $j < count ( $combos [$i] ); $j ++) {
		// If Minimum is greater than maximum grade, we take off that minimum grade from the array
		if ($combos [$i] [10] > $combos [$i] [9]) {
			$new_combos [$i] [$j] = $combos [$i] [$j];
		}
	}
}

?>