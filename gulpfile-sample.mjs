import browserSync from 'browser-sync';
import gulp from 'gulp';
import fs from 'fs';
import archiver from 'archiver';
import inquirer from 'inquirer';
import path from 'path';

export function watch() {
	browserSync.init( [ '**/*' ], { 
		proxy:	'',
		host:		'',
		notify:	false 
	});
}

export default watch;

async function buildPackage() {
	const answers = await inquirer.prompt([
    {
      type: 'input',
      name: 'baseName',
      message: 'Podaj nazwę archiwum (bez wersji):',
      default: 'slug-motywu',
    },
    {
      type: 'input',
   		name: 'version',
        message: 'Podaj numer wersji:',
      default: 'x.x.x',
    },
  ]);

  const baseName = answers.baseName;
  const version = answers.version;

	const archiveName = `${baseName}.${version}.zip`;
	const outputPath = path.resolve('./builds', archiveName);
	const inputPath = './';
	const excludePatterns = ['builds/**', 'gulpfile.mjs', 'node_modules/**', 'package-lock.json', '*.code-workspace'];

	const output = fs.createWriteStream(outputPath);
	const archive = archiver('zip', { zlib: { level: 9 } });

	output.on('close', () => {
		console.log(`Utworzono archiwum: ${archiveName}`);
	});

	archive.on('error', (err) => {
		throw err;
	});

	archive.pipe(output);

  archive.glob('**/*', {
    cwd: inputPath,
    ignore: excludePatterns,
  }, { prefix: `${baseName}/` });

	await archive.finalize();
}

export const build = gulp.series(buildPackage);