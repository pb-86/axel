import browserSync from 'browser-sync';

export function watch() {
  browserSync.init( [ '**/*' ], { 
    proxy:	'',
    host:		'',
    notify:	false 
  });
}

export default watch;