<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-830">
	<div class="container">
		<h2>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h2>
		<div class="creatediv1">
			<div class="row item">
				<div class="panel panel-primary filterable">
						<div class="panel-heading">
							<h3 class="panel-title">Cost Centers<span> *</span></h3>
							<div class="pull-right">
								<button type="button" class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
							</div>
						</div>

						<table class="span12">
							<table>
								<tr class="filters">
									<th>
										<div class="checkbox radio-margin">
											<label>
												<input type="checkbox" value="">
												<span class="cr"><i class="cr-icon fa fa-check"></i></span>
											</label>
										</div>
									</th>

									<th style="width: 48%">
										<input type="text" class="form-control" placeholder="Cost Center Name" disabled>
									</th>

									<th style="width: 48%">
										<input type="text" class="form-control" placeholder="Cost Center ID" disabled>
									</th>
								</tr>
							</table>

							<div class="bg tablescroll">
								<table class="table table-bordered table-striped">
									<tr>
										<th style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</th>
										<th style="width: 49.8%">BYU-I</th>
										<th style="width: 48%">542584612548</th>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Timesheet</td>
										<td style="width: 48%">652145875623</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>

									<tr>
										<td style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</td>
										<td style="width: 48%">Compro</td>
										<td style="width: 48%">854785412563</td>
									</tr>
								</table>
							</div>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>