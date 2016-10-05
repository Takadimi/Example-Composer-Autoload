<?php

namespace Acme;

class Logger {
	public static function d($tag, $m) {
		echo "DEBUG::$tag: $m\n";
	}

	public static function w($tag, $m) {
		echo "WARNING::$tag: $m\n";
	}

	public static function i($tag, $m) {
		echo "INFO::$tag: $m\n";
	}
}
